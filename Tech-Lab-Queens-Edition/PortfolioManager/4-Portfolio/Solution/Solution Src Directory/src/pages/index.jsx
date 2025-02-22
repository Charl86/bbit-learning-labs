import { useState } from "react";
import { useEffect } from "react";
import Share from "@/components/Share";
import SearchBar from "@/components/SearchBar";
import SelectedShareWindow from "@/components/SelectedShareWindow";
import BuyWindow from "@/components/BuyWindow";


export default function Home() {
  const [hardCodedPortfolioValue, setHardCodedPortfolioValue] = useState(10_000);
  const [hardCodedUserAmount, setHardCodedUserAmount] = useState(10_000);

  // Create an object to store the shares of a user, as well as a hook to modify its value
  const [shares, setShares] = useState([]);
  // Create a way of keeping track if data from the backend is still loading
  const [isLoading, setLoading] = useState(true);
  // Create an object to store the selected share, as well as a hook to modify it
  const [selectedShare, setSelectedShare] = useState(null);

  // Create a flag for whether to reveal a share buy window
  const [revealBuyWindow, setRevealBuyWindow] = useState(false);

  async function updateSelectedShare(shareSymbol, shareName) {
    if (!shareSymbol) {
      return;
    }

    // Make call to backend to retrieve share information
    fetch(`http://localhost/wp-json/techlabs/v1/get_share_price/${shareSymbol}`)
      .then(res => res.json())
      .then(data => {
        const sharePrice = data;
        setSelectedShare({ symbol: shareSymbol, name: shareName, sharePrice });
      });
  }

  function resetSelectedShare() {
    setSelectedShare(null);
  }

  function handleOpenSelectedShareWindow() {
    setRevealBuyWindow(true);
  }

  function updatePortfolioValue({ shareAmount, newPortfolioValue }) {
    setHardCodedPortfolioValue(newPortfolioValue);
  }

  // Load all shares owned by current user
  useEffect(() => {
    fetch(`${process.env.NEXT_PUBLIC_API_URL}/get_shares`)
      .then((res) => res.json())
      .then((data) => {
        const _shares = data;
        setShares(_shares);
        setLoading(false);
      })
      .catch(error => {
        console.log(error);
      });
  });

  return (
    <>
      <div className="mx-auto max-w-screen-xl p-4 border border-slate-400 rounded-sm">
        <h1 className="text-5xl font-bold text-gray-900 mb-10">Portfolio Manager</h1>
        <h3 className="text-xl font-bold text-gray-900">Your Value</h3>
        <h2 className="text-4xl text-gray-900 mb-5">${hardCodedPortfolioValue.toLocaleString("en-US")}</h2>
        <div className="text-base">
          <span className="text-1xl text-gray-900 font-bold">Available to Spend: </span>${hardCodedUserAmount.toLocaleString("en-US")}
        </div>
        <h3 className="text-3xl text-gray-900 mt-12 mb-3 font-bold">Your Portfolio</h3>
        <SearchBar updateSelectedShare={updateSelectedShare} resetSelectedShare={resetSelectedShare} />
        <div className="overflow-x-auto">
          <div className={`border-collapse border-y-2  border-y-black text-sm text-left rtl:text-right text-black grid grid-cols-9 ${shares?.length > 1 ? `grid-rows-${shares.length + 1}` : ''}`}>
            <div className="text-cs text-black bg-black contents">
              <div className="border-y border-black px-6 py-3">Name</div>
              <div className="border-y border-black px-6 py-3">Share Price</div>
              <div className="border-y border-black px-6 py-3">1D Change</div>
              <div className="border-y border-black px-6 py-3">Your Shares</div>
              <div className="border-y border-black px-6 py-3">Avg Price</div>
              <div className="border-y border-black px-6 py-3">Mkt Value</div>
              <div className="border-y border-black px-6 py-3 col-span-3">Your Change</div>
            </div>
            <div className="contents">
              {(!selectedShare) ? '' : <SelectedShareWindow selectedShare={selectedShare} handleOpenSelectedShareWindow={handleOpenSelectedShareWindow} />}
              {(!revealBuyWindow || !selectedShare) ? '' : <BuyWindow selectedShare={selectedShare} hardCodedUserAmount={hardCodedUserAmount} setHardCodedUserAmount={setHardCodedUserAmount} portfolioValue={hardCodedPortfolioValue} updatePortfolioValue={updatePortfolioValue} handleCloseWindow={() => setRevealBuyWindow(false)} />}
              {
                (isLoading || shares.length <= 0) ? '' :
                  shares.map(
                    (share, idx) =>
                      <Share key={share["symbol"]} idx={idx} symbol={share["symbol"]} sharePrice={share["sharePrice"]} oneDChange={share["1dChange"]} yourShares={share["yourShares"]} avgPrice={share["avgPrice"]} mktValue={share["mktValue"]} yourChange={share["yourChange"]} hardCodedUserAmount={hardCodedUserAmount} setHardCodedUserAmount={setHardCodedUserAmount} portfolioValue={hardCodedPortfolioValue} updatePortfolioValue={updatePortfolioValue} />
                  )
              }
            </div>
          </div>
        </div>
      </div>
    </>
  );
}
