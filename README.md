
![Logo](https://github.com/myDeed/myDeed/blob/main/loginsystem/images/logo01.png)


# File Structure

myDeed
|
└── documents/
│
| ├── pseudocodes
| | ├── pscd - display
| | ├── pscd - dbconnect.md
| | ├── pscd - login.md
| | ├── pscd - navbar.txt
| | ├── pscd - share
| | ├── pscd - signup.md
| | ├── pscd - upload.txt
| |
| ├── B45-Project Report Final(Aligned).pdf 
| ├── B45-myDeed-FinalVivaVoce-PPT.pptx
| ├── B45-Appendix-C.pdf
| ├── README-FileStructure.md
| ├── README-report&presentation.md 
│
└── loginsystem/ # Login system related files
|
│ ├── contracts/ # Smart contracts for login system
│ ├── css/ # CSS files for login system
│ ├── fonts/ # Font resources for login system
│ ├── functions/ # Function scripts for login system
│ ├── images/ # Image resources for login system
│ ├── js/ # JavaScript files for login system
│ ├── partials/ # Partial HTML/other templates for login system
│ └── scripts/ # Additional scripts for contract deployment
|
| ├── AboutUs.html 
| ├── Main.html 
| ├── contact.html 
| ├── dashboard.php 
| ├── hardhat.config.js # Hardhat configuration file
| ├── login.php # Login PHP script
| ├── package-lock.json # NPM package lock file
| ├── package.json # NPM package file
| ├── readme.md # Readme for the documents directory
| └──  signup.php # Signup PHP script
|
└── screenshots/ # Screenshots related to the project
| ├── change-keys.png # Screenshot for change-keys
| ├── page-1.png 
| ├── page-2.png 
| ├── page-3.png 
| ├── page-4.png 
| ├── page-5.png 
| ├── page-6.png 
| ├── page-7.png 
| ├── readme.md # Readme for screenshots
| └── xampp-1.png 
│
└── README.md # Main README file for the repository


# myDeed

This project manages digital documents by storing their metadata on the Ethereum blockchain. Users can add, share, and display the files they have access to; whilst they can also revoke access of these documents from other users. This solution demonstrates the power of blockchain technology in enabling secure and transparent document sharing.

## Documentation

[Documentation](https://github.com/myDeed/myDeed/tree/main/documents)

- [Final Report](https://github.com/myDeed/myDeed/blob/main/documents/B45-Project%20Report%20Final(signed).pdf)

- [Final Presentation](https://github.com/myDeed/myDeed/blob/main/documents/B45-myDeed-FinalVivaVoce-PPT.pptx)


## Authors

- [Jaymin S Chandaria](https://github.com/telekinetic-0004)
- [Harsh Mehta](https://github.com/aka-Harsh)
- [Keerthi Sai Adithiya](https://github.com/Bronzenstein)


## Demo

- [IPFS demo link](https://ipfs.io/ipfs/Qmb3E52LvsYw9Bgqhz9HaWtkH2oQLFQMX7Xe6hEmtBYQH5)


## Screenshots

1. [http://localhost/loginsystem/](http://localhost/loginsystem/)
![App Screenshot](https://github.com/myDeed/myDeed/blob/main/screenshots/page-1.png)
2. [After Signing up or clicking on "Login"](http://localhost/loginsystem/login.php)
![App Screenshot](https://github.com/myDeed/myDeed/blob/main/screenshots/page-2.png)
3. [Home (Landing Page)](http://localhost/loginsystem/Main.html)
![App Screenshot](https://github.com/myDeed/myDeed/blob/main/screenshots/page-3.png)
4. [After clicking on "Get Started" and connecting with metamask](http://localhost/loginsystem/functions/frames.html)
![App Screenshot](https://github.com/myDeed/myDeed/blob/main/screenshots/page-4.png)
5. [After clicking on "Upload Files"]()
![App Screenshot](https://github.com/myDeed/myDeed/blob/main/screenshots/page-5.png)
6. [After clicking on "My Files"]()
![App Screenshot](https://github.com/myDeed/myDeed/blob/main/screenshots/page-6.png)
7. [After clicking on "Share Access"]()
![App Screenshot](https://github.com/myDeed/myDeed/blob/main/screenshots/page-7.png)

## Run Locally

1. Download and Install Xampp Control Panel

2. Locate to the folder "htdocs" in your C drive or respective place.

3. Open the "htdocs" folder in any IDE and Clone the project

```bash
  git clone https://github.com/myDeed/myDeed.git
```

4. Open the Xampp Control Panel and start these servers - "Apache" & "MySQL"

5. Edit the "httpd.conf" file

- Open the file 
![App Screenshot](https://github.com/myDeed/myDeed/blob/main/screenshots/xampp-1.png)

- Find "index.html" and add the file name "signup.php" at the end of that line.

- Save the file and exit.

6. Open the browser and enter the following url

```bash
  http://localhost/loginsystem/
```

7. You can check the screenshots/demo to use the rest of the functionalities

8. Note:: Don't forget to make a database and table named "users" to store the credentials. This can be done using phpMyAdmin.

```bash
http://localhost/phpmyadmin/
```

9. Note:: Don't forget to add the required api keys and other essentials keys in `/loginsystem/functions/config.json`
- ![App Screenshot](https://github.com/myDeed/myDeed/blob/main/screenshots/change-keys.png)

## Deployment

To deploy the smart contract through hardhat


1. Intall hardhat (Root directory as the project)
```bash
  npm install --save-dev hardhat@latest
```

2. After Installation of hardhat
```bash
  npx hardhat
```

3. This should download all the node modules.

4. Use the same hardhat-config.js file as in the project and thus do the necessary changes in the config.json file.
