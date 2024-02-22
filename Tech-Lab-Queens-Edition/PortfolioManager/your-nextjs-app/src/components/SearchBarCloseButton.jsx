export default function SearchBarCloseButton() {
    return (
      <button className="absolute right-2 top-3 text-gray-500" disabled={true}>
        <svg onClick={() => { updateShareFieldValue(''); resetSelectedShare(); setEnableShareDropdown(false) }} xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
      </button> 
    );
}
