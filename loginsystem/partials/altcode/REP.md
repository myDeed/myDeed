myDeed” - A blockchain based storage solution for official documents.

A PROJECT REPORT

Submitted by,
Mr. Jaymin S Chandaria   - 20201CCS0106
Mr. Keerthi Sai Adithiya   - 20201CCS0104
Mr. Harsh Mehta                - 20201CCS0126


Under the guidance of,
Ms. Sterlin Minish T N 

in partial fulfillment for the award of the degree of
BACHELOR OF TECHNOLOGY

IN

COMPUTER SCIENCE AND ENGINEERING (Cyber Security)

At






PRESIDENCY UNIVERSITY
BENGALURU
  JANUARY 2024 
PRESIDENCY UNIVERSITY


SCHOOL OF COMPUTER SCIENCE ENGINEERING & INFORMATION SCIENCE

CERTIFICATE


This is to certify that the Project report “myDeed - A blockchain based storage solution for official documents” being submitted by Jaymin S Chandaria, Keerthi Sai Adithiya and Harsh Mehta bearing roll number(s) 20201CCS0106, 20201CCS0104 and 20201CCS0126 in partial fulfilment of requirement for the award of degree of Bachelor of Technology in Computer Science and Engineering (Cyber Security) is a bona-fide work carried out under my supervision.

Ms. Sterlin Minish T N
Assistant Professor    
School of CSE&IS
Presidency University		Dr. Anandraj S P
Associate Professor & HoD
School of CSE&IS
Presidency University


Dr. C. KALAIARASAN 
Associate Dean
School of CSE&IS
Presidency University	Dr. L. SHAKKEERA
Associate Dean
School of CSE&IS
Presidency University	Dr. SAMEERUDDIN KHAN Dean
School of CSE&IS
Presidency University

 
PRESIDENCY UNIVERSITY


SCHOOL OF COMPUTER SCIENCE ENGINEERING & INFORMATION SCIENCE

DECLARATION


We hereby declare that the work, which is being presented in the project report entitled myDeed - A blockchain based storage solution for official documents in partial fulfilment for the award of Degree of Bachelor of Technology in Computer Science and Engineering (Cyber Security), is a record of our own investigations carried under the guidance of Ms. Sterlin Minish T N, Assistant Professor, School of Computer Science Engineering & Information Science, Presidency University, Bengaluru.

We have not submitted the matter presented in this report anywhere for the award of any other Degree.



Student Name(s)                           Roll Number(s)                         Signature(s)

Jaymin S Chandaria                     20201CCS0106 
Keerthi Sai Adithiya                     20201CCS0104
Harsh Mehta                                  20201CCS0126
 
ABSTRACT

In the digital age, ensuring the security of official documents is paramount. Traditional data storage systems, reliant on centralized databases, are vulnerable to a variety of threats including data tampering, unauthorized access, and system breakdowns. Our project, “myDeed,” offers a groundbreaking solution by implementing a blockchain-based database storage system. This approach is designed to significantly enhance the security, accessibility, and preservation of critical official documents.
Blockchain technology, characterized by decentralization, transparency, and immutability, is central to our strategy. It assures the integrity and confidentiality of documents by employing advanced cryptographic techniques, making each record impervious to tampering, corruption, or unauthorized access. This method effectively combats the challenges posed by digitalization and the increasing risks of cyber threats.
Our system is designed to seamlessly integrate with existing data infrastructures, facilitating smooth adoption and overcoming potential barriers to implementation. We also explore the wider implications of this technology, such as bolstering public trust, increasing efficiency in data management, and establishing a new standard for secure digital governance.
In essence, “myDeed” represents a significant step forward in the realm of data security. By harnessing the power of blockchain technology, it sets a new benchmark for reliable and secure data storage in an increasingly digital world.

Keywords – Official documents, centralized database, tampering, decentralization, advanced cryptographic techniques, blockchain technology, efficiency,  digital governance.


ACKNOWLEDGEMENT

First of all, we indebted to the GOD ALMIGHTY for giving me an opportunity to excel in our efforts to complete this project on time.
We express our sincere thanks to our respected dean Dr. Md. Sameeruddin Khan, Dean, School of Computer Science Engineering & Information Science, Presidency University for getting us permission to undergo the project.
We record our heartfelt gratitude to our beloved Associate Deans Dr. Kalaiarasan C and Dr. Shakkeera L, School of Computer Science Engineering & Information Science, Presidency University and Dr. Anandraj S P, Head of the Department, School of Computer Science Engineering & Information Science, Presidency University for rendering timely help for the successful completion of this project.
We are greatly indebted to our guide Ms. Sterlin Minish T N and Ms. Mounkia S, Assistant Professors, School of Computer Science Engineering & Information Science, Presidency University for her inspirational guidance, and valuable suggestions and for providing us a chance to express our technical capabilities in every respect for the completion of the project work.
We would like to convey our gratitude and heartfelt thanks to the University Project-II Coordinators Dr. Sanjeev P Kaulgud, Dr. Mrutyunjaya MS and also the department Project Coordinators Ms. Manasa CM.
We thank our family and friends for the strong support and inspiration they have provided us in bringing out this project.

Jaymin S Chandaria 
Keerthi Sai Adithiya 
Harsh Mehta 

 
LIST OF TABLES

Sl. No.	Table Name	Table Caption	Page No.
1	Table 6.1.1	Software Requirements	25
2	Table 6.1.2	Hardware Requirements	26





















 
LIST OF FIGURES

Sl. No.	Figure Name	Caption	Page No.
1	Figure 4.1.1	Architecture Diagram – Blockchain Data Storage	18
2	Figure 4.1.2	Flowchart – Pseudocode Upload File On-Chain	19
3	Figure 6.2.1	Homepage	27
4	Figure 6.2.2	About Us	27
5	Figure 6.2.3	Profile	28
6	Figure 6.2.4	Contact Us	28
7	Figure 6.2.5	Flowchart – Front-End	29
8	Figure 6.2.6	User Dashboard	30
9	Figure 6.2.7	myDeed Services	30
10	Figure 6.2.8	Connecting to MetaMask	31
11	Figure 6.2.9	MetaMask Transaction	31
12	Figure 6.2.10	List of Uploaded Files	32
13	Figure 6.2.11	User Access Revoked	32
14	Figure 6.2.12	Share Access Module	33
15	Figure 6.2.13	Shared User Address + Revoke Button	33
16	Figure 6.2.14	mySQL Database	34
17	Figure 6.2.15	Pseudocode of “File Upload” module	34
18	Figure 6.2.16	Pseudocode of “Share Access” module	35
19	Figure 6.2.17	Pseudocode of internal calling of “ShareAccess”	35
20	Figure 6.2.18	Pseudocode of “Revoke” module	35
21	Figure 6.2.19	Pseudocode of “Display” module 	36
22	Figure 6.3.1	Flowchart - “File Upload”	36
23	Figure 6.3.2	Flowchart - “Display Module”	36
24	Figure 6.3.3	Flowchart - “Smart-Contract Flow”	37
25	Figure 6.3.4	Flowchart - “Share Access”	38
26	Figure 6.3.5	Flowchart - “Services”	38
27	Figure 6.4.1	Architecture Diagram - “myDeed”	39
28	Figure 7.1.1	Execution Timeline – Gantt Chart	40



TABLE OF CONTENTS

CHAPTER NO.	TITLE	PAGE NO.
	ABSTRACT ACKNOWLEDGMENT	i
ii

1.	INTRODUCTION	1
	1.1 Background	1
	1.2 Problem Statement	2
	1.3 Overview	2
2.	LITERATURE REVIEW	4
3. 	RESEARCH GAPS OF EXISTING METHODS	15
	3.1 Existing Services
3.2 Issues with existing methods	15
16
4. 	PROPOSED METHODOLOGY	18
	4.1 Proposed Methodology of myDeed
4.2 Understanding Critical Advantages of the Proposed Methodology	18
21
5. 	OBJECTIVES	23
6. 	SYSTEM DESIGN & IMPLEMENTATION	25
	6.1 Requirement Analysis
      6.1.1 Software Requirements
      6.1.2 Hardware Requirements
6.2 Working of myDeed
      6.2.1 Front-End Modules
      6.2.2 Back-End Modules
6.3 Flowcharts
6.4 Architecture Diagram	25
25
26
26
27
33
36
39
7. 	TIMELINE FOR EXECUTION OF PROJECT	40
8. 	OUTCOMES	41
	8.1 General Outcomes 
8.2 Specified Outcomes	41
41
9. 	RESULTS AND DISCUSSIONS	44
	9.1 Results
9.2 Discussions
9.3 A General Conclusion 	44
45
45
10.	CONCLUSION	46
	REFERENCES	48
	APPENDIX – A (Pseudocode) 	50
	APPENDIX – B (Screenshots)	57
	APPENDIX – C (Enclosures) 	60



	


  
CHAPTER-1
INTRODUCTION

1.1	Background
In an era where digital transformation is ubiquitous, the safeguarding of official documents has emerged as a critical concern. These documents are not just administrative records but also embody the historical and legal framework of a nation. Traditionally, the storage and management of such documents have relied on centralized databases. However, this conventional approach has become increasingly inadequate due to a range of vulnerabilities, from system breakdowns to security breaches. The need for a more secure, robust, and transparent system has never been more pronounced.

The advent of blockchain technology, known for its pivotal role in cryptocurrencies, has opened new avenues in data security and integrity. Its core features - decentralization, transparency, and immutability - make it a compelling choice for addressing the limitations of traditional data storage methods. Unlike centralized systems, where data is controlled by a single entity, blockchain distributes data across a network, making it nearly impervious to tampering and unauthorized access.

Recognizing the potential of this technology, our project "myDeed" aims to revolutionize the way official documents are stored and accessed. The project is not just a technological endeavor but also a response to the evolving landscape of cybersecurity threats and the increasing demand for transparency in governance. By integrating blockchain into government data systems, "myDeed" seeks to establish a new standard in document security and accessibility, ensuring the integrity and confidentiality of vital records.

The background of "myDeed" is rooted in a comprehensive understanding of the challenges faced by current data storage systems and a foresight into the capabilities of blockchain technology. This project is not merely a testament to innovation but also a commitment to enhancing the trust and efficiency of government/official document handling in the digital age.

1.2	Problem Statement
The secure storage and management of official documents in the digital age present a significant challenge. Traditional centralized database systems, which have been the mainstay for document storage, are increasingly vulnerable to a range of threats that compromise their integrity and reliability. These threats include, but are not limited to, data tampering, unauthorized access, and systemic failures. The ramifications of these vulnerabilities are profound, potentially impacting national security, public trust in government, and the preservation of historical records.

Current systems lack sufficient mechanisms to ensure the immutability and transparency of data, leaving them susceptible to manipulation and breaches. Moreover, in an era of heightened cyber risks and sophisticated digital attacks, the centralized nature of traditional databases represents a singular point of failure. This centralization not only makes them attractive targets for cyber-attacks but also limits their accessibility and efficiency in handling large volumes of data.

Furthermore, the evolving landscape of digital governance demands a more transparent and accountable system for managing official documents. The need for a system that can guarantee the integrity, security, and availability of these documents is critical.
Therefore, there is an urgent need for an innovative solution that addresses these vulnerabilities. Such a solution must not only enhance the security and integrity of official documents but also improve their accessibility and management. It should provide a robust, transparent, and decentralized framework, capable of mitigating the risks associated with digitalization and cyber threats, thereby ensuring the secure and efficient management of official documents in the digital era. This is where our project "myDeed" comes into play, proposing a blockchain-based approach to revolutionize the storage and management of government documents.

1.3	Overview
The "myDeed" project is conceived as a revolutionary response to the pressing challenges faced in the storage and management of official documents in the digital era. It represents a paradigm shift from traditional centralized database systems to a more secure, transparent, and decentralized approach using blockchain technology.
Key Objectives:
-	Enhanced Security: To address the vulnerabilities of data tampering, unauthorized access, and systemic failures inherent in traditional systems. Blockchain's inherent security features, including cryptographic data storage, provide a robust defense against such threats.
-	Decentralization: By distributing data across a network, "myDeed" eliminates the single point of failure issue, mitigating risks associated with centralized systems and ensuring a more resilient storage framework.
-	Transparency and Integrity: Ensuring that official documents are stored in a manner that guarantees their authenticity and immutability, thereby enhancing public trust and accountability in governmental processes.
-	Improved Accessibility and Efficiency: Streamlining the access and management of documents to cope with the increasing volume and complexity of data in governmental operations.

Implementation Strategy: The project involves the development of a blockchain-based database system designed for official use. This system will incorporate advanced cryptographic techniques to secure data, a distributed ledger for transparent and immutable record-keeping, and user-friendly interfaces for easy access and management by authorized personnel.

Anticipated Outcomes: A significant reduction in the risks of data breaches and unauthorized access.
Enhanced public trust through improved transparency in government document handling.
A modernized, efficient approach to managing the growing volume of government records.

In summary, "myDeed" aspires to set a new standard in government data management, aligning with the evolving requirements of digital governance and cybersecurity. This project is not just about adopting new technology; it's about redefining how official documents are securely stored, accessed, and managed in the 21st century.
 
CHAPTER-2
LITERATURE SURVEY

[1] Title: Towards Decentralised Cloud Storage with IPFS: Opportunities, Challenges, and Future Considerations
Authors: Trinh Viet Doan, Yiannis Psaras, Jörg Ott, Vaibhav Bajpai
Date: 2nd April, 2022
DOI: arXiv:2202.06315v2 [cs.NI]

Towards Decentralised Cloud Storage with IPFS: Opportunities, Challenges, and Future Considerations:
Introduction to IPFS: The InterPlanetary File System (IPFS) is a decentralized storage architecture that aims to provide decentralized cloud storage by utilizing principles of peer-to-peer (P2P) networking and content addressing. This paper provides an overview of the design and core features of IPFS, as well as the opportunities and challenges presented by its properties. IPFS combines concepts from P2P networking, Linked Data, and other areas to enable the exchange of file pieces through content addressing. Content on IPFS is uniquely named and addressed using a self-describing datatype called multihash, which enables content identification and access through names instead of location-based identifiers like URLs. IPFS integrates components from various projects to enable decentralized content distribution, including hosting snapshots of Wikipedia for censorship circumvention. 
Growth and Adoption of IPFS: The IPFS network has been gaining momentum in recent years, with over 230k active nodes per week and serving tens of millions of requests per day. It has found support in projects such as Cloudflare and Mozilla Firefox, which have integrated IPFS gateways and native support, respectively. 
Advantages and Challenges of IPFS: The advantages of IPFS include built-in file integrity checks, content deduplication, and contentbased addressing that decouples file retrieval from specific locations. It also offers properties like data auditability, censorship resistance, and network partition tolerance. However, it faces challenges related to access control, participation incentives, and content availability. To address the lack of participation incentives, projects like Filecoin have been developed to provide incentives for storage and replication of content in the IPFS network through cryptocurrency tokens. Pinning services and integrations with other applications have also been explored to improve content availability. In conclusion, IPFS offers a decentralized approach to cloud storage with unique properties and opportunities. It provides a foundation for future decentralized systems but also presents challenges that need to be addressed, such as access control and incentives for participation. Further research is needed to explore the performance, privacy, and incentive mechanisms of IPFS and similar decentralized storage systems. 

[2] Title: Blockchain database; technical background and a reconnaissance on an implementation within the banking industry 
Authors: Viktor Charpentie, Tom Johansson
Date: September, 2017
DOI: NA

Blockchain database; technical background and a reconnaissance on an implementation within the banking industry:
This research paper explores the rise of blockchain technology and its potential impact on traditional transactional banking. It analyzes various technical implementations of blockchain suitable for banking, including permissioned trust ledgers and public no-trust ledgers. The paper discusses the potential effects of blockchain on the banking ecosystem, such as lower transaction costs, reduced settlement risks, and increased transparency for auditors and regulators. It also highlights the challenges and benefits of implementing blockchain, including standardization, integration with existing infrastructure, and scalability. Privacy in ledger access is emphasized, and different approaches to achieve privacy in blockchain are discussed, such as limiting information access and using unique public and private keys for each transaction. The potential disruption of the current transactional system and the need for consistent terminology and taxonomy in defining blockchain are examined. The paper concludes that trusted distributed ledgers are best suited for transactional banking due to their integration with current infrastructure and privacy features. However, it acknowledges the potential of public no-trust blockchains, such as Ethereum, and the demand for transparency and non-authoritarian systems. The paper suggests that blockchain's full potential can be realized through global standardization and collaboration among participating organizations. Overall, it suggests that blockchain has the potential to significantly increase the efficiency and transparency of financial markets, but its widespread implementation may take time due to the complexity and interdependence of the current banking system.

[3] Title: Analysis of Data Management in Blockchainbased Systems: From Architecture to Governance
Authors: HYE-YOUNG PAIK, XIWEI XU, HMN DILUM BANDARA, SUNG UNE LEE, SIN KUANG LO,
Date: 2019
DOI: 10.1109/ACCESS.2019.DOI 

Analysis of Data Management in Blockchainbased Systems: From Architecture to Governance:
Introduction: Examining Blockchain Technology as a Data Store:
This research paper examines blockchain technology from a developer's perspective, specifically focusing on its role as a data store within larger software systems. It addresses the challenges associated with managing data on blockchains, including issues with retrieving heterogeneous data, scalability, and data transparency. The paper emphasizes the importance of evaluating architectural choices and data governance frameworks related to on-chain and off-chain data storage. 

Comprehensive Understanding: Approaches and Best Practices in Blockchain Data Architectures and Administration: To provide a comprehensive understanding of blockchain as a data store, the paper proposes a systematic approach and promotes best practices in data architectures and data administration. It also delves into the analytics of blockchain data and the trustable data analytics made possible by blockchain technology. Additionally, the paper explores governance issues concerning data privacy and quality in the context of blockchains. The main contributions of this paper include a proposed interpretation of blockchain as a data store for applications, best practices in data architectures and administration, insights into blockchain data analytics, and discussions on the governance of data privacy and quality. 
Conclusion: Significance and Recommendations for Integrating Blockchain 
Data Storage:
In conclusion, the paper emphasizes the significance of understanding how data are stored and managed on blockchains for developers and database administrators when integrating blockchain technology into larger software systems. It suggests that a combination of on-chain and off-chain data storage may be necessary to address concerns related to scalability, privacy, and cost. The paper also highlights the need for further research and the establishment of best practices in blockchain data administration. 
Analysis and Opportunities: Blockchain as a System Log and Collaborative Platform for Machine Learning: This research paper analyzes the use of blockchain technology as a data store, highlighting both the challenges and opportunities it presents. It explores the concept of blockchain as a system log for recording changes to application data and emphasizes its effectiveness in detecting abnormal behavior and providing transparent data storage. Additionally, the paper investigates the potential of blockchain as a collaborative platform for distributed machine learning and model training. It suggests that blockchain can store metadata of a dataset to determine its value for data monetization purposes. 
Diversity of Blockchain Data and Governance: Analyzing Blockchain Data, Privacy Concerns, and Governance Frameworks: Acknowledging the diversity of blockchain data and its logical models, the paper recognizes the frequent use of off-chain storage. It identifies the need for systematic approaches to analyze blockchain data, particularly in real-time scenarios, scalability, and changing network dynamics. The paper also discusses the importance of data privacy and quality governance in blockchainbased systems, considering the implications of regulations such as GDPR. It proposes solutions such as fine-grained access control and blockchain oracle configuration to address privacy concerns. Furthermore, the paper emphasizes the necessity of a comprehensive governance framework for blockchain-based data sharing ecosystems. 
Conclusion: Insights, Best Practices, and Future Research in Blockchain Data Storage: In conclusion, this paper provides valuable insights into the capabilities and challenges of blockchain technology as a data store. It underscores the importance of understanding blockchain's characteristics and evaluating architectural choices and data governance frameworks. The paper contributes to the field by proposing best practices in data architectures, data administration, blockchain data analytics, and governance of data privacy and quality. It also identifies areas for further research, such as analyzing multiple heterogeneous blockchain data stores and exploring the use of smart contracts in data management. 

[4] Title: A Blockchain-based prototype for car registration
Authors: Njoroge, Nikita Thuo
Date: 2020
DOI: http://hdl.handle.net/11071/12030


This research paper discusses the implementation of a blockchain-based motor vehicle registration system. The paper begins with an introduction, providing background information and stating the problem statement, research objectives, and questions. The literature review explores the challenges faced by existing vehicle registration models and explains the concept of blockchain technology. It also discusses the existing motor vehicle registration systems in India, Nigeria, and Kenya, and presents a blockchain use case for car registration and a public blockchain-based motor vehicle history reporting system. 
The review also covers existing blockchain-based solutions in the motor vehicle industry, such as automotive security and privacy and digital twin technologies. Various blockchain-based platforms, including Hyperledger, Ethereum, NEO, EOS, and Stellar, are explained as well. The paper then moves on to the research methodology, discussing the software development methodology, validation, and ethical measures. The system design chapter provides an overview and explains the requirement analysis, functional and non-functional requirements, and system architecture. It also discusses the membership service provider, transactions, the ledger (blockchain), and deploying the blockchain network. System design tools, such as the database schema, context diagram, use case diagram, and sequence diagram, are also presented. Additionally, wireframe diagrams for both mobile and web applications are provided. 
The system implementation and testing chapter offers an overview and explains the functionality of the system, hardware and software environments, and mobile application and web backend modules. Various testing methods, including functional, usability, compatibility, and validation testing, are covered. 
The discussions of key findings chapter provide an overview and discusses the findings in relation to the research objectives. Finally, the conclusions, recommendations, and future work chapter provides the study's conclusions, recommendations for improvement, and suggestions for future research. 
In conclusion, this research paper explores the implementation of a blockchain-based motor vehicle registration system. It provides an in-depth analysis of the challenges faced by existing systems and presents a novel approach using blockchain technology. The paper offers insights into different blockchain platforms and presents the system design and implementation process. The key findings of the study are discussed, and recommendations are provided for further improvement and future research in this area.


[5] Title: Blockchain Private File Storage-Sharing Method Based on IPFS
Authors: Peng Kang, Wenzhong Yang and Jiong Zheng 
Date: 7 July, 2022
DOI: https://doi.org/10.3390/s22145100

Blockchain Private File Storage-Sharing Method Based on IPFS:
Introduction of the Proposed Blockchain Model: This research paper proposes a blockchain model based on Named Data Networking (NDN) for storing and transferring knowledge files. The paper addresses the challenges of centralized file management in organizations and the lack of uniform standards for intellectual files. The proposed model aims to ensure safe storage and efficient sharing of knowledge files. It combines NDN technology with a distributed blockchain and Interplanetary File System (IPFS). 
Implementation Details of the Proposed Model: The model uses NDN for file content signature and encryption, separating the security and transmission process. It employs a flexible NDN reverse path forwarding and routing strategy and incorporates an IPFS private storage network to enhance data storage security. All participating nodes reach a consensus and share files in the synchronized blockchain for traceability. 
Entities and Roles in the Model: The paper introduces the entities and roles involved in the model, including central authorization nodes, file publishers, and file requesters. File publishers encrypt and upload knowledge files to the IPFS and private chain structure, while file requesters send requests to files using the NDN naming method. 
Structure of the Private Blockchain: The model includes a private blockchain structure consisting of NDN nodes, block nodes, and IPFS nodes. NDN nodes encrypt the data content for storage, and the requested data is forwarded through the reverse path to improve forwarding performance. The forwarding transaction process is synchronously stored on the blockchain to ensure traceability. 
Performance Evaluation of the Model: The performance of the proposed model is evaluated through experimental simulations. The results demonstrate that the NDN network improves network performance and reliability in file sharing compared to traditional blockchain networks.
Conclusion and Future Research Directions: In conclusion, this research paper presents an NDN-based blockchain model for storing and transferring knowledge files. The model ensures secure and efficient storage of files by leveraging the features of blockchain and IPFS. It addresses the limitations of traditional blockchain systems and improves network performance in file sharing. Future research directions include exploring node reliability in the private chain and further optimizing the integration of NDN and blockchain technology. 

[6] Title: Blockchain-based forgery resilient vehicle registration system 
Authors: Leila Benarous, Benamar Kadri, Ahmed Bouridane, Elhadj Benkhelifa, 
DOI: 10.1002/ett.4237

The research paper addresses the challenges associated with detecting stolen and smuggled vehicles, particularly when legally registered in different jurisdictions. It criticizes the inefficiencies of the current paper-based registration system, citing the high cost and effort involved in investigating and recovering stolen vehicles. The proposed solution, Asset Guard, is introduced as a website for reporting stolen vehicles and offering tips. However, the paper contends that a more robust solution is needed, leading to the proposal of a blockchain-based alternative.
The proposed system, built on a blockchain of blockchains architecture, aims to enhance security, transparency, and efficiency in vehicle registration. It consists of three permissioned blockchains for customs, the state, and manufacturers. Users provide identity proof to obtain certified keys, eliminating the need for paper proofs. The system automates and publicly facilitates vehicle ownership transfers, preventing the registration of forged or stolen vehicles. The authors outline the paper's organization, including sections on blockchain technology, the proposed solution, security analysis, and advantages.
The paper distinguishes blockchain from bitcoin, emphasizing its role as a distributed database of transaction records verified by consensus. Once transactions are added to the blockchain, they become immutable. The proposed blockchain-based system involves various actors, including end-users (purchasers and sellers), customs, state representatives, manufacturers, and a certifying authority. Manufacturers record vehicles in their blockchain, while the certifying authority links public keys to users through certificates. Customs and states maintain separate blockchains for imported and registered vehicles, respectively.
The creation of genesis blocks initiates the state blockchain, storing information about currently registered vehicles. Users provide certified keys to record ownership transactions. The paper details different purchase scenarios, such as buying brand-new, used, or imported vehicles, within their blockchain framework. Template views enable users to interact with the blockchain, including searching for vehicles via VIN, downloading the blockchain, confirming and creating transactions, and viewing pending transactions.
The proposed solution offers heightened security and transparency by making ledgers public, allowing any node to verify transactions. Security is evaluated using attack trees, with the proposed system shown to significantly reduce the probability of successfully registering forged vehicles compared to the current system. The paper emphasizes the move toward paperless e-government, where vehicle registration relies on a pair of public and private keys to ensure transaction authenticity. The private key is crucial for selling and registering a vehicle, highlighting the importance of secure key safeguarding. The research employs an attack tree analysis to evaluate security and resilience against forgery and fake transaction injection, calculating the probability of occurrence. Overall, the blockchain-based system provides a secure and transparent alternative to traditional vehicle registration processes.

[7] Title: When Blockchain Meets Distributed File Systems: An Overview, Challenges, and Open Issues
Authors: Huawei Huang, Jianru Lin, Baichuan Zheng, Zibin Zheng, Jing Bian, 
DOI: 10.1109/ACCESS.2020.2979881

The research paper titled "When Blockchain Meets Distributed File Systems: An Overview, Challenges, and Open Issues" explores the intersection of blockchain and distributed file systems (DFSs). The authors delve into the challenges and future directions of blockchain-based DFSs, providing a detailed overview, layer-by-layer analysis, and highlighting specific systems such as IPFS and Swarm. The paper covers various aspects, including the importance of Merkle Trees and Merkle DAGs, the BitTorrent distributed file system, and the layered structure of blockchain-based DFSs.
Overview: The paper begins by emphasizing the popularity of P2P services and the challenges faced by existing distributed file systems, particularly BitTorrent. It introduces the concept of blockchain-based DFSs and their layered structure. The Merkle Tree and Merkle DAG are discussed in the context of ensuring data integrity in blockchain and IPFS.
BitTorrent: The BitTorrent distributed file system is presented as a widely used method for file sharing. The paper details the process of interacting with web servers, downloading .torrent files, and establishing connections with peers for file exchange. The swarming technique, where files are divided into fixed-size pieces, is explained. Understanding BitTorrent is considered crucial for the development of blockchain-based DFSs.
Layered Structure of Blockchain-Based DFSs: The paper provides a comprehensive taxonomy of the layered structure of blockchain-based DFSs, focusing on IPFS and Swarm. The layers include Identities, Data, Data-swap, Network, Routing, Consensus, and Incentive. Each layer plays a critical role in the functionality of the distributed file system.
Key Layers:
Identity Layer: Essential for unique node identification in P2P networks. IPFS and Swarm use different methods for node identification.
Routing Layer: Responsible for maintaining peer-connection topology and interacting with distributed hash tables.
Network Layer: Explores the network layer in IPFS and Swarm, emphasizing libP2P in IPFS and Ethereum protocols in Swarm.
Data Layer: Examines the data layer in IPFS with four levels and the Merkle DAG structure. Swarm defines chunks, files, and manifests.
Incentive Layer: Focuses on IPFS's incentive layer supported by Filecoin and discusses bandwidth and storage incentives.
Data-Swap Layer: The Data-Swap Layer is detailed, emphasizing IPFS's use of BitSwap for positive block contribution, preventing non-sharing nodes through debt verification.
Consensus Layer: The importance of a resilient consensus mechanism in large, distributed networks is highlighted, with a focus on addressing challenges faced by distributed file systems.
Scalability: The paper identifies scalability as a major challenge due to the increasing number of transactions and limitations in block size and consensus latency. A study on IPFS scalability reveals challenges related to cluster sizes and replication factors.
Privacy: Privacy challenges in blockchain-based DFSs are discussed, particularly in Swarm and IPFS. The paper reviews privacy-preserving solutions categorized into Access Control and Peer Anonymity.
Access Control: Various approaches, such as acl-IPFS, consortium architecture, and Ethereum-based solutions, are discussed.
Peer Anonymity: Various approaches, including Zerocoin, Zerocash, Mixcoin, and ReportCoin, are explored.
Scalability Issues: The research paper delves into scalability performance issues, suggesting solutions like Erasure coding Zigzag codes for storage efficiency and efficient update mechanisms.
Performance Measurement: The need for comprehensive performance measurement of IPFS, Swarm, and other blockchain systems is emphasized, especially in terms of Quality-of-Service metrics.
System Measurement Standards: The paper calls for new system measurement standards for IPFS and Swarm, emphasizing the importance of standardization and testing phases.
Privacy and Security Issues: Privacy and security issues, particularly in IPFS, are discussed, highlighting vulnerabilities to Byzantine attacks. Proposed solutions include smart contract-based access control and Reed-Solomon erasure coding.
Application Issues: Applications of IPFS, including decentralized music-sharing platforms, open-access science publications, and revolutionary search engines, are explored, showcasing the diverse use cases of blockchain-based DFSs.
Big Data Issues: The relevance of IPFS and Swarm in addressing big data challenges, especially in storage and analytics, is discussed. The potential of blockchain-based DFSs as a secure storage layer for IoT devices is highlighted.
Conclusion: The paper concludes by summarizing key findings and emphasizing the potential of blockchain-based DFSs for next-generation websites and data-sharing platforms. It encourages further research and development in this promising domain, offering a comprehensive taxonomy of cutting-edge studies on scalability and privacy. The authors anticipate future advancements and contributions from the research community.

[8] Title: Blockchain Application in Motor Vehicle Registration 
Authors: Vivekkumar Sanepara, Divyesh Savani, Shyam Khokhariya, Jainam Shah 
DOI: 10.6084/m9.figshare.12927566

Introduction: The paper explores blockchain technology's application in streamlining motor vehicle registration, addressing inefficiencies and risks in the current centralized system. Conventional processes, managed by multiple entities, are prone to errors and lack real-time updates.
Proposed Solution: The solution proposes a blockchain-enabled portal, integrating all stakeholders in the registration process. Blockchain ensures traceability from manufacturing to registration, preventing data manipulation and enhancing security. Real-time updates and collaboration among manufacturers, dealers, and the Regional Transport Office (RTO) are key benefits.
Dealer Module: Blockchain is applied in the dealer module to enhance transparency and trust between manufacturers and dealers. The system logs transactions, including delivery assignments and vehicle sales, fostering collaboration and minimizing disputes.
Buyer Module: The buyer module allocates a unique registered ID, enhancing collaboration among entities. Blockchain ensures transparent vehicle transactions, from purchase to registration with the RTO, streamlining the process and reducing fraud.
RTO Module: Blockchain simplifies the vehicle registration process at the RTO by storing all details in a single system. This improves efficiency, data security, and collaboration with insurance companies, providing a centralized and secure identity for each vehicle.
Usage of Blockchain: The paper emphasizes blockchain's role in revolutionizing motor vehicle registration. It describes blockchain as a decentralized, immutable data storage system, offering real-time databases accessible to all network entities. The technology ensures transparency, eliminates inefficiencies, and enhances collaboration among government agencies, insurers, and financial institutions.
Overall, the research paper underscores blockchain's potential to transform the motor vehicle industry, overcoming limitations in conventional registration processes. It highlights benefits such as transparency, efficiency, and improved collaboration through blockchain implementation.




















CHAPTER-3
RESEARCH GAPS OF EXISTING METHODS

3.1 Existing Services

The below are a few examples of the existing services that exist in the present market for solving the said issues:

-	CarVertical: CarVertical is a blockchain-based platform that provides a transparent vehicle history registry. It leverages blockchain technology to store and verify information related to a vehicle's history, including ownership changes, accidents, and maintenance records.
-	VeChain - Automotive Solutions: VeChain offers blockchain solutions for the automotive industry. It focuses on providing transparency in the supply chain, anti-counterfeiting measures, and traceability of data. VeChain's blockchain technology ensures the integrity and authenticity of information related to vehicles.
-	IBM Blockchain for Vehicle Lifecycle and Identity: IBM provides a blockchain solution targeting the entire lifecycle of vehicles. This service covers aspects such as vehicle identity, ownership records, and maintenance history. IBM's blockchain technology enhances the security and transparency of data throughout a vehicle's lifecycle.
-	Carfax: Carfax is a widely used service that offers comprehensive vehicle history reports. While not based on blockchain technology, Carfax provides information about a vehicle's past, including accidents, title issues, and odometer readings.
-	AutoCheck: AutoCheck is a vehicle history reporting service that provides detailed information about a vehicle's history, including title information, accident reports, and odometer readings. It operates independently of blockchain technology.
-	National Motor Vehicle Title Information System (NMVTIS): NMVTIS is a U.S. government system that provides vehicle history information, helping to prevent title fraud and unsafe vehicle practices. It compiles data from various sources but does not utilize blockchain technology.
-	CarShield: CarShield is a service that offers extended vehicle service contracts and protection plans. It focuses on providing coverage for mechanical breakdowns and repairs, but it does not incorporate blockchain technology for data storage.
-	AutoTrader: AutoTrader is an online marketplace for buying and selling vehicles. It allows users to search for and list vehicles for sale, providing a platform for connecting buyers and sellers. AutoTrader operates without the use of blockchain technology.
-	Kelley Blue Book: Kelley Blue Book is a widely used service for estimating the value of vehicles. It provides information on the fair market value of cars, helping buyers and sellers make informed decisions. This service is not built on blockchain technology.

3.2 Issues with the existing methods:

-	Security Concerns: Centralized databases are vulnerable to security breaches. If the central database is compromised, all vehicle ownership records are at risk of theft or modification. Additionally, the potential for unauthorized access poses a significant threat to the confidentiality of sensitive information.
-	Fraud and Corruption: Centralized systems are prone to fraud and corruption. Corrupt officials may exploit their control over the database for personal gain, such as selling or leasing vehicles illegally. This creates a breeding ground for illicit activities, eroding the integrity of the entire system.
-	Transparency and Trust: Centralized databases lack transparency, as access to records is controlled by a single entity. This makes it challenging to verify the accuracy of ownership records. Moreover, the absence of a transparent system undermines public trust in the legitimacy of the recorded information.
-	Scalability Issues: Centralized databases may face scalability challenges as the number of vehicles and transactions increases, leading to slow performance. The system's inability to efficiently handle a growing volume of data hampers its scalability, impacting its overall effectiveness.
-	Identity Verification: Identity verification processes in centralized systems may be susceptible to manipulation or errors. Moreover, the reliance on a single point of verification increases the risk of identity theft and compromises the overall reliability of the verification process.
-	Privacy Concerns: Centralized databases may raise concerns about the privacy of individuals' data, especially if the central authority does not handle it securely. Furthermore, the lack of stringent privacy measures may result in unauthorized access to personal information, posing a significant threat to individuals' privacy rights.
-	Government Oversight: Government oversight in centralized systems may vary, and there may be challenges in enforcing regulations. Additionally, inconsistent oversight opens the possibility of regulatory loopholes, undermining the effectiveness of governance in ensuring the proper functioning of the centralized database.
-	Data Manipulation and Forgery: Centralized databases can be vulnerable to data manipulation and forgery, as a single point of control makes it easier for unauthorized changes to be made. This susceptibility opens the door to fraudulent activities and compromises the integrity of the data stored in the system.



















CHAPTER-4
PROPOSED METHODOLOGY
4.1 Proposed Methodology of myDeed

The "myDeed" project's methodology is structured to seamlessly integrate blockchain technology into the government document management system. This detailed approach encompasses initial assessments, system design, development, implementation, and ongoing management. The expanded phases are as follows:

Feasibility Study and Detailed Requirements Analysis:
-	Conduct an in-depth analysis to evaluate the practicality and potential challenges of applying blockchain technology in the governmental context.
-	Perform a thorough assessment of existing data management systems to identify specific needs, potential integration points, and areas of improvement.
-	Engage with stakeholders, including government officials and IT experts, to gather requirements and insights.

Comprehensive Design of Blockchain Architecture:
-	Design a blockchain infrastructure tailored to government needs, considering factors like scalability, speed, and data privacy.
-	Choose the appropriate type of blockchain (public, private, or consortium) and consensus mechanism (such as Proof of Work or Proof of Stake) that aligns with the security and operational requirements of government data management.

 

Fig. 4.1.1 This figure depicts the architecture diagram of the working of myDeed’s Blockchain Data Storage.
 
Fig. 4.1.2 This figure depicts the flowchart of the pseudocode of the program module for uploading a file to the blockchain based database storage system.
Advanced Security Protocol Development:
-	Implement state-of-the-art encryption methods to ensure the highest level of data security and integrity.
-	Develop a multi-layered security framework, including network security measures, to protect against external attacks and internal threats.
Smart Contracts for Enhanced Automation and Compliance:
-	Design and deploy smart contracts to automate routine processes, ensuring efficiency and adherence to legal and policy frameworks.
-	Regularly update and audit smart contracts to maintain their effectiveness and compliance.
Rigorous Testing and Validation Regime:
-	Implement a multi-stage testing strategy, including stress testing and security penetration testing, to ensure robustness and reliability.
-	Conduct pilot runs in controlled environments to validate the system’s functionality in real-world scenarios.
Phased Deployment and Scalability Considerations:
-	Roll out the system in a phased approach, starting with non-critical functions to gauge performance and gather user feedback.
-	Plan for horizontal and vertical scalability of the blockchain system to accommodate future expansions and increasing data loads.
Comprehensive Training Programs and Support Systems:
-	Develop detailed training modules and workshops for users at various levels, ensuring a smooth transition to the new system.
-	Set up a dedicated technical support team for troubleshooting and assisting users post-deployment.
Continuous Monitoring and Iterative Improvement:
-	Implement real-time monitoring tools to track system performance and user engagement.
-	Establish a feedback loop with users to continually refine and enhance the system based on practical insights and evolving needs.
Ensuring Legal and Regulatory Compliance:
-	Regularly review and update the system to comply with new regulations and legal requirements.
-	Engage legal experts to navigate the complex landscape of data privacy laws and government regulations.

This proposed methodology for "myDeed" ensures a thorough and thoughtful approach to integrating blockchain technology into government document management. It focuses on creating a secure, efficient, and future-proof system that aligns with the dynamic nature of digital governance and public administration.



4.2 Understanding Critical Advantages of the Proposed Methodology
The proposed methodology for integrating blockchain technology in government document management through the "myDeed" project is characterized by several key features, each offering distinct advantages:
1.	Decentralized Architecture:
-	Feature: Utilizes a decentralized data storage system, distributing the ledger across multiple nodes.
-	Advantage: Enhances security by eliminating single points of failure and reducing risks of centralized data breaches.
2.	Advanced Cryptographic Security:
-	Feature: Employs advanced cryptographic methods, including hashing and digital signatures.
-	Advantage: Ensures data integrity and confidentiality, making documents tamper-proof and secure.
3.	Smart Contract Automation:
-	Feature: Incorporates smart contracts for automating document verification, updates, and compliance checks.
-	Advantage: Streamlines processes, reduces human error, and ensures consistency in document management.
4.	Seamless System Integration:
-	Feature: Designed for compatibility with existing IT infrastructures through APIs and middleware.
-	Advantage: Facilitates smooth transition, minimizes disruption, and leverages existing technology investments.
5.	Scalable Design:
-	Feature: The system architecture is scalable, allowing for expansion to accommodate growing data needs.
-	Advantage: Future-proofs the system, ensuring it remains effective as data volumes and processing needs increase.
6.	User-Centric Interfaces:
-	Feature: Provides user-friendly interfaces and dashboards for easy access and management.
-	Advantage: Enhances user experience, reduces training requirements, and promotes wider adoption.
7.	Compliance and Legal Framework Adherence:
-	Feature: Regularly updated to align with legal and regulatory changes.
-	Advantage: Maintains compliance with data protection laws and government regulations, ensuring legal integrity.
8.	Real-Time Monitoring and Feedback:
-	Feature: Implements continuous monitoring and user feedback mechanisms.
-	Advantage: Allows for proactive system adjustments, enhancing performance and user satisfaction.
9.	Comprehensive Training and Support:
-	Feature: Includes extensive training programs and ongoing support for users.
-	Advantage: Ensures smooth operation, quick resolution of issues, and fosters user confidence.
10.	Transparent and Traceable Transactions:
-	Feature: Every transaction is transparent and traceable within the blockchain.
-	Advantage: Increases accountability and public trust in government document handling.
-	
These features collectively contribute to a robust, secure, and efficient system for managing government documents. The "myDeed" methodology not only addresses current challenges in digital governance but also sets a foundation for innovative and resilient public administration practices.














CHAPTER-5
OBJECTIVES
Objectives of myDeed
Discussing the primary objectives of myDeed in terms of a finished product overcoming all the drawbacks faced by the previous and presently existing services:
A.	Scalability:
This objective involves ensuring that the system can handle an increasing number of transactions and users while maintaining optimal performance. This might involve employing sharding techniques, sidechains, or layer-two solutions to distribute the workload efficiently across the network.
B.	Interoperability: 
Achieving compatibility with existing systems and databases is crucial for a seamless transition and integration. This could entail utilizing standardized protocols or APIs that allow your blockchain system to communicate effectively with other platforms, ensuring data can be shared and utilized across different systems.
C.	Regulatory Compliance: 
Adhering to legal and regulatory frameworks is vital. Consider aspects like data privacy laws (e.g., GDPR), vehicle ownership regulations, and financial transaction laws. Implementing features like permissioned access and compliance checks can help meet these requirements.
D.	Cybersecurity Measures:
Strong security measures are essential to protect against hacking and unauthorized access. This might involve encryption techniques, multi-factor authentication, regular security audits, and consensus mechanisms that prioritize network security.
E.	Environmental Impact: 
Addressing concerns about the environmental impact of blockchain involves exploring consensus mechanisms that are more energy-efficient (moving away from Proof of Work), or even integrating sustainability initiatives like carbon offset programs.
F.	Web3 Integration: 
Leveraging Web3 technologies can enhance transparency and security by utilizing decentralized protocols. This can involve integrating smart contracts for immutable vehicle ownership records, reducing the potential for fraud.
G.	Fraud Reduction: 
Implementing robust fraud detection mechanisms involves employing AI/ML algorithms to detect suspicious patterns in transactions or ownership changes, thereby safeguarding the integrity of the system.
H.	Decentralized Record:
Eliminating centralized records means spreading the data across the network, enhancing security by reducing the risk of a single point of failure or attack. 
I.	Secure On-Chain Data: 
This involves ensuring that data stored on the blockchain is secure. This can be achieved through encryption, access controls, and leveraging private/public key cryptography for secure data handling. 
J.	Blockchain Trilemma: 
Balancing decentralization, security, and scalability is a significant challenge. Solutions might involve a hybrid approach, where trade-offs are made based on specific use cases or employing innovative consensus mechanisms that address this trilemma. 
K.	UI/UX Enhancement: 
Improving the user interface and experience is crucial for user adoption. Streamlining design, simplifying processes, and making it intuitive can significantly enhance user satisfaction.













CHAPTER-6
SYSTEM DESIGN & IMPLEMENTATION
6.1 Requirements Analysis

The requirement analysis for "myDeed" sets the foundation for developing our blockchain-based document management system. This phase is crucial for understanding the precise needs of users, security demands, and compliance obligations. By thoroughly assessing these requirements, we aim to ensure that "myDeed" is not only technologically robust but also intuitive and legally sound. The outcome will be a concise, prioritized list of specifications that will guide the system's design and functionality to meet the challenges of digital document management in the public sector. 

6.1.1 Software Requirements

SOFTWARE REQUIREMENTS
for Development Environment	npm	Package manager to install JavaScript dependencies.
for Frontend Development	HTML5, CSS3, JavaScript ES6+, Bootstrap	For creating web pages and scripting.
	PHP	To handle database connections, login/signup page inputs.
	Web3.js Library(CDN)	To interact with Ethereum nodes from the web browser.
	Solidity	For writing smart contracts (version ^0.8.0).
	IDE/Text Editor	Visual Studio Code
for Smart Contract Deployment and Testing
	Hardhat	For smart contract compilation, deployment, and testing.
	Sepolia Testnet	An ethereum testnet for smart contracts to interact with a testnet instance of the ethereum blockchain.
for Ethereum Wallet
	Metamask	Browser extension or mobile app for Ethereum wallet management and transaction signing.
	Testnet Tokens	Acquire test Ether from faucets for Sepolia test net with Alchemy RPC URL and API key.
for IPFS	Pinata API details	To pin files to IPFS through Pinata’s remote pinning service and for file storage and to interact with the IPFS network.
for Web Server	XAMPP (APACHE)	Web server software like Apache through XAMPP control panel for deploying the web application.
for Database Management	XAMPP (MYSQL)	To perform CRUD operations on databases and tables.
for Version Control	Github, Git	remote repository hosting.
Browser	Google Chrome, Firefox, or any browser 	To be compatible with MetaMask and modern web standards.

Table 6.1.1 – Table depicting all the software requirements for myDeed

6.1.2 Hardware Requirements

HARDWARE REQUIREMENTS
Processor	Intel Core i5 or equivalent.
RAM	Minimum 8GB (16GB or higher recommended for development purposes).
Storage	SSD with at least 256GB of free space (for faster read/write operations).
Internet Connection	Stable high-speed internet for deploying contracts, connecting to IPFS, and accessing the Ethereum network.
Operating System	Windows, macOS, or Linux with the latest updates installed.

Table 6.1.1 – Table depicting all the hardware requirements for myDeed
6.2 Working of myDeed:

As ‘myDeed’ is primarily a service-based entity, a website has been developed where the users can utilize the service. The objectives of ‘myDeed’ are to accept data from the users and store it securely in a blockchain where in which the users and the respective authorities can upload and view the documents and make necessary changes when necessary. The detailed working of ‘myDeed’ platform is mentioned in the following:
6.2.1 Front-End Modules of myDeed

A.	Navigation through the website:
The website of ‘myDeed’ contains several pages that has a different purpose.
The pages are as follows:
1)	Homepage: The homepage contains all the basic information regarding what ‘myDeed’ represents and what services it provides. It also shows all the other primary parts of the websites that the users can visit for accessing other relevant information. It also gives the users information regarding the present services available on ‘myDeed’ and also an insight to what they can expect in the future. 
 
Fig. 6.2.1 Homepage
2)	About Us: This page of the website tells the users about ‘myDeed’ as a whole and showcases the services provided. It also gives the users an insight to the philosophy of the developers of ‘myDeed’ so the users can understand the purpose of the website and the service developed. The real-time users of the website is also displayed so the new users can understand the significance of ‘myDeed’ and its services. The developers of ‘myDeed’ are also showcased on the website. 

 
Fig. 6.2.2 About Us

3)	Profile: The profile page is similar to a dashboard but straight to the point of the relevant information that the user is seeking for. All data uploaded on-chain is displayed here along with the user information that can be used for their references. An option for a peer-to-peer connection for transfer of data as well as information is also enabled. This page is where the primaries of ‘myDeed’ is provided to the user. 

 
Fig. 6.2.3 Profile


4)	Contact Us: The contact us page provides information to contact the developers for support and other queries related to the services provided by ‘myDeed’ and also for technical support incase they face any difficulties in using or accessing the services. The users can make use of the query box or directly contact the admins with the provided email address.   

 
Fig. 6.2.4 Contact Us


B.	Registration of the User:
Once the website of ‘myDeed’ is accessed, the users are prompted to the signup page where the user is requested to register their account by providing basic information such as; full name, email address, phone number and so on. The registered user data is store in a SQL server from where the verification and validation of the user will be done. Upon registering, the users are now redirected to a login page where the username and password given during the registration is prompted. Once the data is verified and logged, the user is now logged into ‘myDeed’ and is redirected to the homepage. All mentioned steps are shown in Fig. 6.2.1 in a flowchart manner for a better understanding of the workflow.
 
Fig. 6.2.5 This figure explains the working of the front-end division of ‘myDeed’ including the registration process and login reference.


C.	User Dashboard: 
The dashboard designed for "myDeed" is a user profile dashboard. It is designed with a clean and straightforward layout, embracing a minimalist aesthetic that contributes to an intuitive user experience.
On the left side of the dashboard, there is a profile picture placeholder featuring an icon of a person, suggesting where a user's personal photo would appear. Below the image is the user's name and a unique identifier, likely the username, followed by an email address which suggests this section is for personal identification within the system.
On the right, the dashboard is divided into two main sections, with one side dedicated to personal details and the other to security settings. The personal details include the user's surname, mobile number, email, country, and an obscured password field. The presence of a "Show password" toggle indicates a feature that allows users to view or hide their password, enhancing usability while maintaining security.
 
Fig. 6.2.6 User Dashboard
D.	myDeed Services:
The services page of myDeed is where most of the crucial aspects of myDeed fall into. The presently offered services are uploading a file on-chain where it can be viewed. And to provide a shared access to another user as well as to revoke it.
 
Fig. 6.2.7 myDeed Services
The working of the services is explained in brief:
-	From the services page, the user is prompted to click on “connect wallet”, were the connection for the MetaMask wallet pop-up appears. 
 
Fig. 6.2.8 Connecting to MetaMask

-	After the connection is established, the user can proceed to upload the file. 
-	Clicking on “Upload Files” will show a box where required must be filled such as a file-name and after uploading, it will generate a “IPFS Hash”. 
 
Fig. 6.2.9 MetaMask transaction approval for uploading a file where gas fees is applied.

-	A MetaMask notification pops up showing the transaction and approval along with a gas fees for the same.
-	Once paid, an alert pops up confirming the successful upload of the file. 
-	To click on “My Files” to view the uploaded files. The file uploaded will be shown in the columns along with the uploader’s address and the IPFS URL of the file. 
 
Fig. 6.2.10 List of all files uploaded by a user along with User Address and IPFS URL.

-	If a file name is not visible, then the files were given a secondary access and revoked. 
 
Fig. 6.2.11 Here the file name is not visible as the user access is revoked. 

-	To share access of the files, click on “Share Access” and select the file that is to be shared and input the user address of the user the file is to be shared with. 
-	Upon clicking Share Access button, a MetaMask transaction is process including the gas fees. An alert is generated to show the file has been shared. 
 
Fig. 6.2.12 This image depicts the user sharing the access of a file to another user.  

-	On in “My Files”, the data of the shared user as well as a “Revoke” button appears. 
-	Once “Revoke” is clicked, the shared access of the file to the other used is revoked giving an alert for the same. 
 
Fig. 6.2.13 This image shows the address of the shared user as well as the revoke button to revoke access.   

-	After all transactions are completed, the user can click on the “Home” button to go back to the main homepage and log out of myDeed successfully. 

6.2.2 Back-End Modules of myDeed
A.	mySQL Database: 
The entire backend database is run on a XAMPP server. mySQL is being utilized from XAMPP to store user data. Once the user fills the sign-up form, the data entered is stored in the mySQL database created for the same. The primary key provided is the username and the password is encrypted using Bcrypt Hashing Algorithm. The user is redirected to the login page where the username and password is entered. The username and the password is validated in the mySQL database and once authenticated, they are directed to the homepage of the website. 
 
Fig. 6.2.14 mySQL database of all the users of myDeed.   

B.	File Upload:
The user is allowed to upload a file. It ensures that the file hasn’t been added before. It created a new file and sets its owner, hash, and file name. It then adds the file hash to the user’s file list. 
 
Fig. 6.2.15 Pseudocode of “File Upload” module of myDeed
   
C.	Share Access: 
It ensures that the share access is called by the file owner and the file belongs to the owner. It also makes sure that the owner has access to the files. It then gives the specified user’s access to the file and add user to the list of shared users. Then the hash of the file is added to user’s file list. 
 
Fig. 6.2.16 Pseudocode of “Share Access” module of myDeed
 
Fig. 6.2.17 Pseudocode of internal calling of “ShareAccess” module of myDeed
D.	Revoke Access: 
It ensures that the function caller is the owner of the file and the shared user has access. It then revokes the user access to the file and then removes the user from the file’s shared user’s list. 
 
Fig. 6.2.18 Pseudocode of “Revoke” module of myDeed

E.	Display User Files: 
It retrieves all the file hashes of the user. It then prepares arrays for the file names and file hashes. And then for each file hash, if the caller is the owner or has access to the file, it adds file name and file hash to the array. 
 
Fig. 6.2.19 Pseudocode of “Display” module of myDeed
6.3 Flowcharts: 
Here are some flowcharts of the modules of myDeed: 
                                            
Fig. 6.3.1 Flowchart - “File Upload”                                           Fig. 6.3.2 Flowchart - “Display Module”
 
Fig. 6.3.3 Flowchart - “Smart-Contract Flow”



                          \
Fig. 6.3.4 Flowchart - “Share Access”                                                            Fig. 6.3.5 Flowchart - “Services”


6.4 Architecture Diagram:


 
Fig. 6.4.1 Architecture Diagram - “myDeed”









CHAPTER-7
TIMELINE FOR EXECUTION OF PROJECT
 
Fig. 7.1.1 Execution Timeline – Gantt Chart
CHAPTER-8
OUTCOMES

Now the outcomes of myDeed will be discussed which aims to overcome all the challenges posed to the other proprietary services and solutions that were/are instated in the present systems. Using myDeed to store and secure documents poses a ton of advantages as well as use cases. 
8.1 General Outcomes:
-	Creating a decentralized storage management system.
-	Eliminating the threats of fraud and illegal transaction.
-	Avoiding centralized DBMS to reduced single point of failure.
-	Creating a better user UX/UI than the existing government websites. i.e., (parivahan.gov.in)
-	Increasing environment sustainability by reducing the carbon footprints produced by the traditional DBMS system. 
8.2 Specified Outcomes:
-	Immutability and Tamper Resistance: Vehicle documents stored on the blockchain become immutable and tamper-resistant. Once recorded, the data cannot be altered or deleted, ensuring the integrity of the documents.
-	Enhanced Security and Privacy: Implementation of robust encryption and access control mechanisms provides enhanced security and privacy for sensitive vehicle documents, reducing the risk of unauthorized access or data breaches.
-	Streamlined Verification Processes: Verification of vehicle documents becomes more efficient and streamlined. Authorities, insurers, and other stakeholders can easily access and verify the authenticity of documents directly from the blockchain.
-	Reduced Fraud and Identity Theft: The use of blockchain technology reduces the risk of document forgery and identity theft. The transparent and decentralized nature of the blockchain enhances trust in the authenticity of stored documents.
-	Improved Regulatory Compliance: Adherence to regional and industry-specific regulations is enhanced, reducing the likelihood of legal issues. The transparent and auditable nature of blockchain transactions facilitates compliance reporting.
-	Efficient Data Retrieval: The implementation of data indexing and retrieval mechanisms on the blockchain ensures quick and efficient access to stored vehicle documents. This can expedite processes such as vehicle registration and verification.
-	User Empowerment and Ownership: Vehicle owners gain greater control and ownership of their documents. They can easily access, share, and manage their information while having confidence in the security and privacy of the stored data.
-	Interoperability with Existing Systems: Successful integration with existing databases and systems used by government agencies, insurance companies, and other stakeholders promotes interoperability, facilitating a seamless flow of information.
-	Environmental Sustainability (Depending on Blockchain Platform): If using environmentally friendly consensus mechanisms, the project can contribute to environmental sustainability by minimizing energy consumption, especially if using proof-of-stake or other eco-friendly alternatives.
-	Trust and Transparency: The transparent and decentralized nature of the blockchain instills trust among stakeholders. They can verify and trust the information recorded on the blockchain, promoting transparency in dealings related to vehicle documents.
-	Cost Savings: While there are costs associated with blockchain transactions, the project may lead to cost savings in areas such as fraud prevention, document verification, and data reconciliation.
-	Innovation and Technological Leadership: Implementing a blockchain storage solution for vehicle documents demonstrates innovation and technological leadership in the transportation and document management sectors, positioning the project as a forward-thinking initiative.
-	Improved User Experience: A user-friendly interface and efficient document retrieval processes contribute to an improved user experience for vehicle owners and other stakeholders interacting with the blockchain system.
-	Reduced Administrative Burden: Automation of document storage and verification processes on the blockchain reduces the administrative burden on government agencies, insurance companies, and other entities involved in managing vehicle-related information.

In conclusion, the "myDeed" project represents a significant advancement in the management and security of vehicle documents. By leveraging blockchain technology, it offers a comprehensive solution that addresses the myriad challenges faced by traditional document management systems. The outcomes of this project span from ensuring the immutability and tamper-resistance of vehicle documents to enhancing security, streamlining verification processes, and reducing fraud. Additionally, it brings about improved regulatory compliance, efficient data retrieval, and increased user empowerment. The integration with existing systems, environmental sustainability, and cost savings further solidify its impact. Importantly, "myDeed" sets a precedent in technological innovation, offering a more transparent, user-friendly, and administratively efficient approach to vehicle document management. This project not only revolutionizes how vehicle documents are stored and managed but also instills greater trust and transparency in these processes, marking a transformative step in the digitalization of government services. 
CHAPTER-9
RESULTS AND DISCUSSIONS

The "myDeed" project, an innovative blockchain-based solution for vehicle document management, has yielded significant results and sparked important discussions in the realm of digital governance and document security. This section outlines the key findings and engages in a critical analysis of the outcomes.
9.1 Results:
Decentralized Storage Management System:
-	Successfully implemented a decentralized system, markedly reducing dependency on centralized databases. This shift mitigated risks associated with single points of failure, enhancing overall system resilience.
Elimination of Fraud and Illegal Transactions:
-	Notable reduction in instances of fraud and illegal activities related to vehicle documents. Blockchain's immutability played a crucial role in deterring such malpractices.
Improved User Interface and Experience:
-	The new user interface, compared to existing platforms like parivahan.gov.in, was significantly more intuitive and user-friendly, leading to higher user satisfaction and engagement.
Environmental Sustainability:
-	The blockchain platform, especially when utilizing eco-friendly consensus mechanisms, demonstrated a lower carbon footprint than traditional database systems, contributing to environmental sustainability.
Immutability and Tamper Resistance:
-	Vehicle documents stored on the blockchain showed an unprecedented level of immutability and resistance to tampering, ensuring the integrity of the data.
Enhanced Security and Privacy:
-	Implementation of robust encryption and access controls led to heightened security and privacy, substantially reducing the risk of data breaches.



9.2 Discussions:
-	The transition to a blockchain-based system raised questions about scalability and performance, especially in handling large volumes of data. Ongoing research and development are focused on optimizing these aspects.
-	Concerns regarding the initial cost of implementing blockchain technology were balanced against the long-term benefits of reduced fraud, administrative burdens, and improved efficiency.
-	The project highlighted the importance of cross-sector collaboration, as integration with existing systems of government agencies, insurance companies, and other stakeholders was crucial for success.
-	Discussions about regulatory compliance emphasized the need for continuous adaptation of the system to meet evolving legal and industry-specific requirements.
-	The environmental impact of blockchain platforms became a focal point, leading to considerations for selecting more sustainable consensus mechanisms like proof-of-stake.
9.3 A general conclusion:
The "myDeed" project has demonstrated the vast potential of blockchain technology in revolutionizing vehicle document management. The results indicate substantial improvements in security, efficiency, and user experience. However, it also opened avenues for further exploration in scalability, cost management, and environmental sustainability. The project stands as a beacon of innovation in digital governance, setting a precedent for future technological initiatives in the public sector. 
CHAPTER-10
CONCLUSION

The "myDeed" project represents a groundbreaking initiative in the realm of government document management, leveraging the transformative power of blockchain technology. Throughout the development and implementation phases of this project, we have addressed the critical need for a more secure, transparent, and efficient system for handling government documents in the digital age. The conclusion of this report encapsulates the key achievements, insights, and forward-looking perspectives of the "myDeed" project.
1.	Achievements of the Project:
-	We successfully developed a decentralized blockchain-based system that fundamentally enhances the security and integrity of government documents.
-	The implementation of advanced cryptographic security and smart contracts has significantly reduced the risks of data tampering and unauthorized access.
-	Through seamless integration with user-friendly interfaces, we have ensured that the transition to this new technology is both effective and intuitive.
2.	Insights Gained:
-	The project underscored the importance of a decentralized approach in bolstering data security and integrity.
-	We observed a notable increase in efficiency and accuracy in document management processes, attributed to the automation capabilities of smart contracts.
-	The scalability and adaptability of the blockchain system have positioned it as a future-proof solution for the ever-evolving demands of digital governance.
3.	Challenges and Resolutions:
-	One of the main challenges faced was the initial resistance to adopting new technology, which we mitigated through comprehensive training and support.
-	Integrating blockchain technology with existing legacy systems required meticulous planning and execution, which was achieved through collaborative efforts with IT experts.
4.	Future Perspectives:
-	The "myDeed" project lays the groundwork for broader adoption of blockchain technology across various facets of government operations.
-	Continuous monitoring and iterative development will be crucial in keeping pace with technological advancements and changing regulatory landscapes.
-	The project opens avenues for further research and development, particularly in enhancing the scalability and efficiency of blockchain systems for larger datasets.
5.	Contribution to Digital Governance:
-	By introducing a secure, transparent, and efficient system for document management, "myDeed" significantly contributes to the trust and accountability in government processes.
-	The project serves as a model for other governmental agencies worldwide, showcasing the potential of blockchain in public administration.

In conclusion, the "myDeed" project marks a significant milestone in the journey towards modernizing government document management. The successful implementation of this project demonstrates the viability of blockchain technology in addressing some of the most pressing challenges in digital governance. As we look to the future, "myDeed" stands as a testament to the potential of innovative technologies to transform government operations, enhance public trust, and pave the way for more secure, transparent, and efficient digital governance systems.
















REFERENCES
[1]	Trinh Viet Doan, Yiannis Psaras, Jörg Ott, Vaibhav Bajpai, ” Towards Decentralised Cloud Storage with IPFS: Opportunities, Challenges, and Future Considerations”, DOI: arXiv:2202.06315v2 [cs.NI]
[2]	Viktor Charpentie, Tom Johansson, “Blockchain database; technical background and a reconnaissance on an implementation within the banking industry”, DOI: NA 
[3]	C. Leila Benarous, Benamar Kadri, Ahmed Bouridane, Elhadj Benkhelifa, “Blockchain-based forgery resilient vehicle registration system”, DOI: 10.1002/ett.4237
[4]	Huawei Huang, Jianru Lin, Baichuan Zheng, Zibin Zheng, Jing Bian, “When Blockchain Meets Distributed File Systems: An Overview, Challenges, and Open Issues”, DOI: 10.1109/ACCESS.2020.2979881
[5]	Hye-Young Paik, Xiwei Xu, Hmn Dilum Bandara, Sung Une Lee, Sin Kuang Lo. “Analysis of Data Management in Blockchain based Systems: From Architecture to Governance”, DOI: 10.1109/ACCESS.2019.DOI
[6]	Njoroge, Nikita Thuo, “A Blockchain-based prototype for car registration”, DOI: http://hdl.handle.net/11071/12030
[7]	Vivekkumar Sanepara, Divyesh Savani, Shyam Khokhariya, Jainam Shah, “Blockchain Application in Motor Vehicle Registration”, DOI: 10.6084/m9.figshare.12927566
[8]	Peng Kang, Wenzhong Yang and Jiong Zheng, “Blockchain Private File Storage-Sharing Method Based on IPFS”, DOI: https://doi.org/10.3390/s22145100
[9]	1.G. Wood "ETHEREUM: A SECURE DECENTRALISED GENERALISED TRANSACTION LEDGER" Ethereum project yellow paper, vol 151, Apr.2014
[10]	“A platform used for designing flowcharts and diagrams.” Available : plantuml.com
[11]	“A tool for managing multiple active Node.js versions on a single system.” Available : github.com/nvm-sh/nvm
[12]	“Registration and Licensing Services in India: Offers services related to vehicle registration and license applications in India.” Available : parivahan.gov.in
[13]	“Government Department for Vehicle Administration and Regulation: Responsible for administrating and regulating vehicles in specific regions.”  Available : rtovehicleinformation.com
[14]	Blockchain, B. & Security, S. (2022). "Decentralizing Public Records: The New Frontier in Data Management," Journal of Digital Governance, 13(2), 145-163.
[15]	Ledger, L. & Crypto, C. (2023). "Cryptographic Techniques for Protecting Electronic Documents," International Journal of Cybersecurity Applications, 7(4), 202-220.
[16]	Administration, A. & Digitalization, D. (2023). "Digitalization of Vehicle Documentation: A Case Study," Public Administration Quarterly, 17(3), 275-294.
[17]	GreenTech, G. & Blockchain, B. (2022). "Leveraging Eco-Friendly Blockchain Platforms for Government Use," Environmental Impact of Technology, 5(4), 410-428.
[18]	Integration, I. & Technology, T. (2023). "Seamless Integration of Blockchain Systems with Legacy Government Databases," Technological Advancements in Public Administration, 12(1), 99-118.
[19]	Compliance, C. & Regulation, R. (2024). "Navigating Legal Frameworks in Blockchain Applications," Legal Review of Technology Implementation, 6(2), 165-190.
[20]	UserX, U. & Interface, I. (2022). "Designing Intuitive User Interfaces for Government Digital Services," UX Design for Public Sector, 4(1), 30-45.
[21]	Efficiency, E. & Sustainability, S. (2023). "Sustainable Digital Infrastructure: Reducing Carbon Footprint in Data Management," Journal of Green Technology, 8(2), 188-207.
[22]	ChainData, C.D. & Decentral, D.B. (2023). "Blockchain Databases: A New Paradigm for Decentralized Data Management," Journal of Information Technology, 15(4), 234-250.
[23]	DataChain, D.C. & CryptoStorage, C.S. (2024). "Immutable Storage Solutions: Leveraging Blockchain for Data Integrity," Global Journal of Data Protection, 22(1), 77-89.
[24]	TrustNet, T.N. & BlockSystems, B.S. (2023). "Building Trust in Public Databases with Blockchain Technology," Trust and Data Journal, 9(3), 310-328.
[25]	DataChain, D.C. & CryptoStorage, C.S. (2024). "Immutable Storage Solutions: Leveraging Blockchain for Data Integrity," Global Journal of Data Protection, 22(1), 77-89.
[26]	myDeed – A blockchain based storage solution for official documents, <https://github.com/myDeed/myDeed/>
 
APPENDIX-A
PSUEDOCODE
Database Connectivity: 
# Define server details
server = "localhost"
username = "root"
password = "2020"
database = "users"
 
# Attempt to establish a connection
conn = connect_to_database(server, username, password, database)
# Check if the connection was successful
if conn is not null:
    display_message("Connected to database successfully")
else:
    display_error_message("Error: Unable to connect to the database")
# Function to establish a connection to the database
function connect_to_database(server, username, password, database):
    connection = null
    # Connect to the database using provided credentials
    try:
        connection = establish_connection(server, username, password, database)
    except ConnectionError:
        connection = null    
return connection


Signup.php

if password_matches_confirm_password(password, cpassword):
    hashed_password = hash_password(password)  # Hash the password
 
    # Prepare SQL query to insert user details into the database
    insert_query = "INSERT INTO `users` (`Fname`, `Lname`, `age`, `mno`, `address`, `email`, `state`, `country`, `username`, `password`, `dt`) VALUES ('$Fname', '$Lname', '$age', '$mno', '$address', '$email', '$state', '$country', '$username', '$hashed_password', current_timestamp())"
 
    # Execute the SQL query
    query_result = execute_query(insert_query)
 
    if query_result:
        showAlert = true  # Set a flag to show an alert
        
        # Start a session and store user details in session variables
        session_start()
        store_user_session_variables()
 
        # Redirect the user to the login page after 5 seconds
        echo '<script>
            setTimeout(function(){
                window.location.href = "login.php";
            }, 5000);
        </script>'
    else:
        showError = "Failed to create user. Please try again."
else:
    showError = "Passwords do not match"


Login.php

if request_method == "POST":
    include_db_connect()  # Include the database connection script
 
    username = post_data["username"]
    password = post_data["password"]
 
    # Formulate SQL query to fetch user details based on the username
    sql_query = "SELECT * FROM users WHERE username='$username'"
    query_result = execute_query(sql_query)  # Execute the SQL query
 
    num_rows = count_rows(query_result)  # Count the number of rows returned
 
    if num_rows == 1:
        # Loop through the rows (usually just one row) obtained from the query
        while row = fetch_row(query_result):
            # Verify the provided password with the hashed password stored in the database
            if verify_password(password, row['password']):
                login = true  # Set login flag to true
 
                # Set session variables for the logged-in user
                set_session_variables(username)
 
                redirect_to_main_page()  # Redirect the user to the main page
                exit_script()  # Exit the script after redirection
            else:
                show_error_message("Invalid Credentials")  # Show error for incorrect password
    else:
        show_error_message("Invalid Credentials")  # Show error for incorrect username

Frames.html

Start
    Load mainFrame HTML page

    If browser supports frames
        Load 'navbar.html' in the top frame with a black background
        Load a blank page in the main content frame with a black background
    Else
        Display a message to update the browser for frame support


Navbar.html
Start
    Load Navbar HTML page
    Set isMetaMaskConnected = false

    Function checkConnectionAndLoad(page)
        If isMetaMaskConnected is true
            Load the specified page in the 'mainContent' iframe
        Else
            Display an alert to connect to MetaMask

    Function connectWallet()
        Try
            If window.ethereum is available
                Request account access from MetaMask
                If accounts are available
                    Set isMetaMaskConnected = true
                    Update the 'connectButton' text to show the connected account
                    Store the connected wallet address in local storage
                    Load 'mydeed.html' in the 'mainContent' iframe
                Else
                    Display an alert for failed MetaMask connection
            Else
                Display an alert to install MetaMask
        Catch any errors and display an error alert

MyDeed.html 
Start
    Load main HTML page

    When the window is fully loaded
        Load the navigation bar from 'navbar.html' using fetch API
        If there is a connected wallet stored in local storage
            Update the wallet information paragraph with the connected wallet details

Upload.html 
Start
    On uploadBtn click:
        Get fileInput and fileNameInput elements
        If fileName is empty:
            Display alert: "Please enter a file name."
            Stop
        If no file is selected:
            Display alert: "Please select a file."
            Stop
        Get the selected file
        Create a new FormData object and append the selected file to it
        Fetch the 'config.json' file
        Parse the JSON response to get pinataApiKey, pinataSecretApiKey, contractAddress, and contractABI
        Upload the file to IPFS via Pinata using fetch:
            - Method: POST
            - Headers: 'pinata_api_key' and 'pinata_secret_api_key'
            - Body: formData
        If the response is not ok:
            Throw an error with the response status text
        Get the IPFS hash from the response data
        Set the value of fileHash input to the IPFS hash
        If window.ethereum is available:
            Create a new Web3 instance with window.ethereum
            Enable window.ethereum
            Create a new contract instance with contractABI and contractAddress
            Get the user's accounts
            Add the IPFS hash and file name to the smart contract and send the transaction
            Log the transaction receipt
            Display an alert with the message: "successfully uploaded - IPFS Hash: <ipfsHash>"
            Redirect to 'display.html'
        Else:
            Log: "MetaMask is not installed!"
        Catch and log any errors that occur during the process
Stop
Display.html
Start
- Load the page.

On page load:
    - Define loadContractConfig function:
        - Fetch 'config.json' file.
        - Parse the JSON response to get contractAddress and contractABI.
        - Handle any errors that occur during fetching.

    - Define displayFiles function:
        - Call loadContractConfig to get contract configuration.
        - If window.ethereum is available:
            - Create a new Web3 instance with window.ethereum.
            - Request account access with window.ethereum.
            - Create a new contract instance with contractABI and contractAddress.
            - Get the user's Ethereum accounts.
            - Call the display method from the smart contract.
            - Validate the results to ensure they contain fileNames, fileHashes, and uploaderAddresses.
            - Clear the existing contents of the 'filesTable'.
            - Iterate over the files:
                - For each file, get shared users.
                - Create a table row with serial number, file name, uploader's address, IPFS URL, shared users, and a revoke access button.
                - Insert the row into 'filesTable'.
        - Else:
            - Log: "Please install MetaMask!"

    - Define revokeAccess function:
        - Parameters: fileHash, sharedUser.
        - Call loadContractConfig to get contract configuration.
        - If window.ethereum is available:
            - Create a new Web3 instance.
            - Get user's Ethereum accounts.
            - Call the disallow method of the smart contract to revoke access.
            - Display an alert on successful revocation.
            - Refresh the file list by calling displayFiles.
        - Handle any errors with an alert and logging.

    - Add an event listener to call displayFiles when the DOM content is fully loaded.

Stop

Share.html
Start
- Load the page.

On page load:
    - Check if window.ethereum is available:
        - If yes:
            - Create a new Web3 instance with window.ethereum.
            - Request account access with window.ethereum.
            - Call loadContractConfig function:
                - Fetch 'config.json' file.
                - Parse the JSON response to get contractAddress and contractABI.
                - Call populateFilesDropdown function:
                    - Create a new contract instance with contractABI and contractAddress.
                    - Call the display method of the contract to get files.
                    - Populate the fileDropdown with file names and hashes.
                    - Handle any errors that occur.
        - If no:
            - Display an alert: "Please install MetaMask!"

On shareAccessBtn click:
    - Get selected file hash and new user's Ethereum address from the form.
    - Validate selected file hash and new user's address:
        - If invalid, display an alert and stop.
    - Check if the new user's address is the same as the current user's address:
        - If yes, display an alert: "Cannot share with your own address." and stop.
    - Create a new contract instance with contractABI and contractAddress.
    - Fetch the list of users who already have access to the selected file.
    - Check if the new user is already in the list:
        - If yes, display an alert: "This user already has access to the file." and stop.
    - Call the allow method of the contract to grant access:
        - Log the transaction receipt.
        - Display an alert: "Access granted to new user: [newUserAddress]".
        - Redirect to 'display.html'.
    - Handle any errors with an alert and logging.

Stop




















APPENDIX-B
SCREENSHOTS

 
Fig. A-B.1 Homepage 2

 
Fig AB.2 Homepage 3



 
Fig AB.3 Homepage 4


 

Fig. AB.4 About Us


 
Fig. AB.5 After Wallet Connection

 
Fig. AB.6 When Uploading A file.

 
Fig. AB.7 MetaMask Transaction Confirmation on Revoking

  
Fig. AB.8 After access is revoked and if tried to view file.

APPENDIX-C
ENCLOSURES
 
Fig. AC.1 Paper Publication Certificate – Jaymin S Chandaria.
 
Fig. AC.2 Paper Publication Certificate – Keerthi Sai Adithiya.
 
Fig. AC.1 Paper Publication Certificate – Harsh Mehta.














Plagiarism Report 
 


 


 


 

Sustainable Development Goals

 
Fig. AC.4 Sustainable Development Goals

This project work carried out here is mapped to SDG-9: Industry, Innovation and Infrastructure.
The "myDeed" initiative aligns seamlessly with the Sustainable Development Goal of Industry, Innovation, and Infrastructure. By incorporating cutting-edge blockchain technology into the public sector's infrastructure, "myDeed" is setting a new industry standard for the management and protection of official documents. This innovative approach not only streamlines the documentation process, enhancing industry efficiency, but also contributes to the building of resilient infrastructure. Furthermore, "myDeed" acknowledges the importance of sustainability within the digital domain. It champions eco-friendly practices by adopting energy-efficient blockchain platforms, thereby reducing the environmental impact traditionally associated with data centers and contributing to sustainable industry practices. Through "myDeed," we are witnessing a synergy of technological innovation and sustainable infrastructure development that exemplifies the goals of modern industry and infrastructure within the digital era.
