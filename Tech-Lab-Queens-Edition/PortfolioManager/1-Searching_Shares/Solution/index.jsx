import { useState } from "react";
import Share from "@/components/Share";
import SearchBar from "@/components/SearchBar";

export default function Home() {
  const [hardCodedPortfolioValue, setHardCodedPortfolioValue] = useState(10_000);
  const [hardCodedUserAmount, setHardCodedUserAmount] = useState(10_000);

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
        <SearchBar></SearchBar>
        <div className="overflow-x-auto">
          <div className={`border-collapse border-y-2  border-y-black text-sm text-left rtl:text-right text-black grid grid-cols-7 grid-rows-1`}>
            <div className="text-cs text-black bg-black contents">
              <div className="border-y border-black px-6 py-3">Name</div>
              <div className="border-y border-black px-6 py-3">Share Price</div>
              <div className="border-y border-black px-6 py-3">1D Change</div>
              <div className="border-y border-black px-6 py-3">Your Shares</div>
              <div className="border-y border-black px-6 py-3">Avg Price</div>
              <div className="border-y border-black px-6 py-3">Mkt Value</div>
              <div className="border-y border-black px-6 py-3">Your Change</div>
            </div>
            <div className="contents">
              { <Share /> }
            </div>
          </div>
        </div>
      </div>
    </>
  );
}
