var account;

async function connectWalletHandler() {
    console.log("connect metamask")
    if (window.ethereum && window.ethereum.isMetaMask) {
        // web3 = AlchemyWeb3.createAlchemyWeb3("wss://polygon-mainnet.g.alchemy.com/v2/rOl8vpXFZqtOLshIVqpccqhOH3j0Xmlm");
        // contractInstance = new web3.eth.Contract(contractABI, contractAddress);
        await window.ethereum
            .request({ method: "eth_requestAccounts" })
            .then((result) => {
                console.log("acc request " + result);
                account = window.ethereum.selectedAddress;
                if(account) {
                    window.location.href = '/account/'+account;
                }
                console.log("account is "+account);
                console.log("Successfully connected MetaMask wallet!");
                
            })
            .catch((error) => {
                // sendAlert("Something went wrong", "red");
                console.log("error is " + error.message);
            });
    } else {
        // sendAlert("Install MetaMask browser extension", "red");
        // console.log("Need to install MetaMask");
        console.log("Please install MetaMask browser extension to interact");
    }
};

async function connectWC() {
    var provider = new WalletConnectProvider.default({
        rpc: {
            // 1: "https://cloudflare-eth.com/", // https://ethereumnodes.com/
            // 4: "wss://eth-rinkeby.alchemyapi.io/v2/keC7ZRcIgiotApUd960gwire8vcu5YMa",
            137: "https://polygon-rpc.com/", // https://docs.polygon.technology/docs/develop/network-details/network/
            // ...
    
        },
        bridge: 'https://bridge.walletconnect.org',
    });
    provider.enable();
    const web3 = new Web3(provider);
    window.w3 = web3;

    var accounts = await web3.eth.getAccounts(); // get all connected accounts
    account = accounts[0]; // get the primary account
    if(accounts[0]) {
        window.location.href = '/account/'+account;
    }
    console.log("account is "+account);
}
