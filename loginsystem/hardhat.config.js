require("@nomicfoundation/hardhat-toolbox");
const fs = require('fs');

// Load the configuration from config.json
const configPath = 'functions/config.json'; // Adjust the path if necessary
const rawConfig = fs.readFileSync(configPath);
const { SEPOLIAURL, PRIVKEY } = JSON.parse(rawConfig);

module.exports = {
  solidity: "0.8.19",

  networks: {
    sepolia: {
      url: SEPOLIAURL,
      accounts: [PRIVKEY]
    },
  }
};
