const connectBtn = document.querySelector('#connect_wallet');
const showAccount = document.querySelector('#connect_wallet .name');
connectBtn.addEventListener('click', () => {
  getAccount();
});

async function getAccount() {
  if(window.ethereum != undefined) {
    if(ethereum.chainId == 56 || ethereum.chainId == 97){ // bsc mainnet or testnet
      const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
      const account = accounts[0];
      showAccount.innerHTML = account;
      var msgTitle = "Account Info";
      var msgContent = "Successfully connected wallet! ";
      msgContent += "<br>Current Selected Address: " + ethereum.selectedAddress.toString();
    } else {
      var msgTitle = "Wrong network";
      var msgContent = "Please select Binance-Smart-Chain Network (ChainId: 56 or 97)";
      msgContent += "<br>Current ChainId: " + Number(ethereum.chainId, 10).toString();
    }
    dialogAlert(msgContent, msgTitle);
  } else {
    dialogAlert("Please install Metamask!");
  }
}

function setAccountInfo() {
  showAccount.innerHTML = ethereum.selectedAddress ? ethereum.selectedAddress : 'Connect Wallet';  
  showAccount.setAttribute('title', ethereum.selectedAddress ? ethereum.selectedAddress : 'Connect Wallet');
}
// init
$(function(){
  if(window.ethereum != undefined){
    if(ethereum.isConnected){
      setAccountInfo();

      ethereum.on('accountsChanged', (accounts) => {
        // Handle the new accounts, or lack thereof.
        // "accounts" will always be an array, but it can be empty.
        setAccountInfo();
      });
      
      ethereum.on('chainChanged', (chainId) => {
        // Handle the new chain.
        // Correctly handling chain changes can be complicated.
        // We recommend reloading the page unless you have good reason not to.
        window.location.reload();
      });
    }   
  }
});

