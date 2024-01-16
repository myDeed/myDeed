const hre = require("hardhat");

async function main() {
    console.log("Starting deployment...");

    // Get the signers to identify the deploying address
    const [deployer] = await hre.ethers.getSigners();
    console.log("Deploying contract with the account:", deployer.address);

    // Measure the start time
    const startTime = new Date();

    // Deploy the contract
    console.log("Deployment in process, please wait...");
    const upload = await hre.ethers.deployContract("mydeed");
    await upload.waitForDeployment();

    // Measure the end time and calculate the duration
    const endTime = new Date();
    const deploymentTime = (endTime - startTime) / 1000; // Convert milliseconds to seconds

    console.log("Library deployed to:", upload.target);
    console.log(`Deployment completed in ${deploymentTime} seconds.`);
}

main().catch((error) => {
    console.error(error);
    process.exitCode = 1;
});
