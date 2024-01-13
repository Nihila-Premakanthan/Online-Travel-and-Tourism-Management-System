CREATE TABLE Registered_Customer(
	CID varchar(6),
	First_Name varchar(30), 
	Last_Name varchar(30),
	Email varchar(30),
	DOB date,
	Address varchar(100),
	NIC varchar(12),
	Passport varchar(20),
	Mobile char(11),
	Registered_Date date,
	CONSTRAINT Registered_Customer_PK PRIMARY KEY(CID),
	CONSTRAINT check_mobile CHECK (Mobile LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]'),
	CONSTRAINT check_email CHECK (Email LIKE '%@%'),
	CONSTRAINT check_nic CHECK (NIC LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]')
);

INSERT INTO Registered_customer 
VALUES('RC0001' , 'Nihila' , 'Premakanthan' , 'nihila.p@gmail.com' , '2002/10/01' , 'No. 10, School Lane, Colombo 5' , '200254789163' , '' , '94778563521' , '2022/04/28' );
INSERT INTO Registered_customer 
VALUES('RC0002' , 'Kanishka' , 'Perera' , 'kanishka.p@gmail.com' , '2001/04/01' , 'No. 25/1, Daham Road, Kelaniya' , '200135984524' , '' , '94716897457' , '2022/01/16' );
INSERT INTO Registered_customer 
VALUES('RC0003' , 'Gahana' , 'Karunanathan' , 'gahana.k@hotmail.com' , '2000/08/25' , 'No. 21, Beach street, Dehiwala, Mt. Lavinia' , '200065987432' , '' , '94778563521' , '2022/02/28' );
INSERT INTO Registered_customer 
VALUES('RC0004' , 'Pasindu' , 'Bandara' , 'pasindu.b@gmail.com' , '1998/11/25' , 'No. 78/2, Nawam Mawatha, Malambe' , '199865487954' , '' , '94756589452' , '2022/01/15' );
INSERT INTO Registered_customer 
VALUES('RC0005' , 'Oshitha' , 'Senarathne' , 'oshitha.p1089@gmail.com' , '1995/12/22' , 'No. 20/1, Kalugahawatta Rd, Piliyandala' , '199535719784' , '' , '94779538181' , '2022/01/10' );

CREATE TABLE Foreign_Booking(
	FBID varchar(10),
	Type varchar(20),
	Price decimal(10,2),
	Location varchar(50),
	Date date, 
	CONSTRAINT Foreign_Booking_PK PRIMARY KEY(FBID)
);

INSERT INTO Foreign_Booking VALUES('FB0001' , 'Silver' , '250000.00' , 'Canada' , '2022/3/15');
INSERT INTO Foreign_Booking VALUES('FB0002' , 'Gold' , '175000.00' , 'Australia' , '2022/3/20');
INSERT INTO Foreign_Booking VALUES('FB0003' , 'Bronze' , '225000.00' , 'London' , '2022/4/25');
INSERT INTO Foreign_Booking VALUES('FB0004' , 'Gold' , '85000.00' , 'China' , '2022/5/15');
INSERT INTO Foreign_Booking VALUES('FB0005' , 'Bronze' , '155000.00' , 'Italy' , '2022/6/6');

CREATE TABLE Customer_FB(
	CID varchar(6),
	FBID varchar(10),
	No_of_Orders char (5),
	CONSTRAINT Customer_FB_PK PRIMARY KEY(CID, FBID),
	CONSTRAINT Customer01_FB_FK FOREIGN KEY(CID) REFERENCES Registered_Customer(CID),
	CONSTRAINT Customer02_FB_FK FOREIGN KEY(FBID) REFERENCES Foreign_Booking(FBID)
);

INSERT INTO Customer_FB
VALUES ('RC0001', 'FB0002', '5');
INSERT INTO Customer_FB
VALUES ('RC0003', 'FB0004', '6');
INSERT INTO Customer_FB
VALUES ('RC0005', 'FB0003', '4');

CREATE TABLE Local_Booking(
	LBID varchar(10),
	Type varchar(20),
	Price decimal(10,2),
	Location varchar(50),
	Date date,
	CONSTRAINT Local_Booking_PK PRIMARY KEY(LBID)
);

INSERT INTO Local_Booking
VALUES('LB0001' , 'Gold' , '45000.00' , 'Kandy' , '2022/10/05');
INSERT INTO Local_Booking
VALUES('LB0002' , 'Bronze' , '50000.00' , 'Galle' , '2022/07/05');
INSERT INTO Local_Booking
VALUES('LB0003' , 'Silver' , '55000.00' , 'Nuwara Eliya' , '2022/06/06');
INSERT INTO Local_Booking
VALUES('LB0004' , 'Gold' , '60000.00' , 'Jaffna' , '2022/04/05');
INSERT INTO Local_Booking
VALUES('LB0005' , 'Silver' , '50000.00' , 'Hambantota' , '2022/08/05');

CREATE TABLE Customer_LB(
	CID varchar(6),
	LBID varchar(10),
	No_of_Orders char(5),
	CONSTRAINT Customer_LB_PK PRIMARY KEY(CID, LBID),
	CONSTRAINT Customer_LB_FK FOREIGN KEY(CID) REFERENCES Registered_Customer(CID),
	CONSTRAINT Customer_L_B_FK FOREIGN KEY(LBID) REFERENCES Local_Booking(LBID)
);

INSERT INTO Customer_LB
VALUES ('RC0005', 'LB0001', '5');
INSERT INTO Customer_LB
VALUES ('RC0003', 'LB0002', '4');
INSERT INTO Customer_LB
VALUES ('RC0003', 'LB0004', '3');

CREATE TABLE Package(
	PKID varchar(6),
	Name varchar(20),
	Price decimal(10, 2),
	Location Varchar(50),
	CONSTRAINT Package_PK PRIMARY KEY(PKID)
);

INSERT INTO Package VALUES('P0001' , 'Gold' , '75000.00' , 'Kandy');
INSERT INTO Package VALUES('P0002' , 'Silver' , '50000.00' , 'Nuwara Eliya');
INSERT INTO Package VALUES('P0003' , 'Bronze' , '25000.00' , 'Puttalam');
INSERT INTO Package VALUES('P0004' , 'Gold' , '65000.00' , 'Jaffna');
INSERT INTO Package VALUES('P0005' , 'Silver' , '45000.00' , 'Chillaw');

CREATE TABLE Customer_Package(
	CID varchar(6),
	PKID varchar(6),
	CONSTRAINT Customer_Package_PK PRIMARY KEY(CID, PKID),
	CONSTRAINT Customer_Package_FK FOREIGN KEY(CID) REFERENCES Registered_Customer(CID),
	CONSTRAINT Customer_Pack_FK FOREIGN KEY(PKID) REFERENCES Package(PKID)
);

INSERT INTO Customer_Package
VALUES ('RC0003', 'P0001');
INSERT INTO Customer_Package
VALUES ('RC0001', 'P0002');
INSERT INTO Customer_Package
VALUES ('RC0004', 'P0003');

CREATE TABLE Offer(
	OID varchar(6),
	Name varchar(20),
	Price decimal(10,2),
	Location varchar(50),
	CONSTRAINT Offer_PK PRIMARY KEY(OID)
);

INSERT INTO Offer VALUES('O0001' , 'SL Super Saver' , '150000.00' , 'Kandy');
INSERT INTO Offer VALUES('O0002' , 'Explore Historic SL' , '200000.00' , 'Puttalam');
INSERT INTO Offer VALUES('O0003' , 'Feel Good Sri Lanka' , '80000.00' , 'Nuwara Eliya');
INSERT INTO Offer VALUES('O0004' , 'Romantic SL' , '100000.00' , 'Bentota');
INSERT INTO Offer VALUES('O0005' , 'One day Trip' , '50000.00' , 'Jaffna');

CREATE TABLE Customer_Offer(
	CID varchar(6),
	OID varchar(6),
	CONSTRAINT Customer_Offer_PK PRIMARY KEY(CID, OID),
	CONSTRAINT Customer_Offer_FK FOREIGN KEY(CID) REFERENCES Registered_Customer(CID),
	CONSTRAINT Cus_Offer_FK FOREIGN KEY(OID) REFERENCES Offer(OID)
);

INSERT INTO Customer_Offer
VALUES ('RC0003', 'O0001');
INSERT INTO Customer_Offer
VALUES ('RC0002', 'O0003');
INSERT INTO Customer_Offer
VALUES ('RC0001', 'O0004');

CREATE TABLE Tour_Guide(
	TGID varchar(6),
	Name varchar(20),
	Contact_No char(10),
	DOB date,
	CONSTRAINT Tour_Guide_PK PRIMARY KEY(TGID),
	CONSTRAINT check_co CHECK (Contact_No LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]')
);

INSERT INTO Tour_Guide VALUES('TG0001' , 'Perera' , '0773087693' , '1989/10/2');
INSERT INTO Tour_Guide VALUES('TG0002' , 'Kusum' , '0765216381' , '1985/5/15');
INSERT INTO Tour_Guide VALUES('TG0004' , 'Namal' , '0775983326' , '1990/1/12');
INSERT INTO Tour_Guide VALUES('TG0003' , 'Gahana' , '0775983326' , '1990/1/12');
INSERT INTO Tour_Guide VALUES('TG0005' , 'Kamal' , '0775983326' , '1990/1/12');

CREATE TABLE Payment(
	PID varchar(6),
	Amount decimal(10,2),
	CONSTRAINT Payment_PK PRIMARY KEY(PID)
);

INSERT INTO Payment
VALUES ('PM0001' , '25000.00');
INSERT INTO Payment
VALUES ('PM0002' , '35000.00');
INSERT INTO Payment
VALUES ('PM0003' , '45000.00')
INSERT INTO Payment
VALUES ('PM0004' , '55000.00');
INSERT INTO Payment
VALUES ('PM0005' , '65000.00');

CREATE TABLE Payment_Type(
	PTID varchar(6),
	Type varchar(20),
	PID varchar(6),
	CONSTRAINT Payment_Type_PK PRIMARY KEY(PTID, Type),
	CONSTRAINT Payment_Type_FK FOREIGN KEY(PID) REFERENCES Payment(PID)
);

INSERT INTO Payment_Type
VALUES ('PT0001' , 'Debit Card', 'PM0001');
INSERT INTO Payment_Type
VALUES ('PT0002' , 'Credit Card', 'PM0005');
INSERT INTO Payment_Type
VALUES ('PT0003' , 'Pay Pal', 'PM0004');
INSERT INTO Payment_Type
VALUES ('PT0004' , 'Cash', 'PM0003');

CREATE TABLE Customer_Payment(
	CID varchar(6),
	PID varchar(6),
	Date_of_Payment date,
	CONSTRAINT Customer_Payment_PK PRIMARY KEY(CID, PID),
	CONSTRAINT Customer_Payment_FK FOREIGN KEY(PID) REFERENCES Payment(PID),
	CONSTRAINT Cust_Payment_FK FOREIGN KEY(CID) REFERENCES Registered_Customer(CID)
);

INSERT INTO Customer_Payment
VALUES ('RC0003', 'PM0001', '2022/01/10');
INSERT INTO Customer_Payment
VALUES ('RC0002', 'PM0003', '2022/05/04');
INSERT INTO Customer_Payment
VALUES ('RC0004', 'PM0002', '2022/06/08');

CREATE TABLE Branch(
	BID varchar(6),
	Name varchar(20), 
	Contact_No char(10),
	CONSTRAINT Branch_PK PRIMARY KEY(BID),
	CONSTRAINT check_cont CHECK (Contact_No LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]')
);

INSERT INTO Branch
VALUES('B00001' , 'Kandy', '0779456321');
INSERT INTO Branch
VALUES('B00002' , 'Kurunagalle', '0772398650');
INSERT INTO Branch
VALUES('B00003' , 'Jaffna', '0779463891');
INSERT INTO Branch
VALUES('B00004' , 'Colombo', '0779456322');
INSERT INTO Branch
VALUES('B00005' , 'Gampaha', '0779456311');

CREATE TABLE Branch_FB(
	FBID varchar(10),
	BID varchar(6),
	CONSTRAINT Branch_FB_PK PRIMARY KEY(FBID, BID),
	CONSTRAINT Branch_FB_FK FOREIGN KEY(FBID) REFERENCES Foreign_Booking(FBID),
	CONSTRAINT Branch_F_B_FK FOREIGN KEY(BID) REFERENCES Branch(BID)
);

INSERT INTO Branch_FB
VALUES ('FB0001', 'B00001');
INSERT INTO Branch_FB
VALUES ('FB0003', 'B00005');
INSERT INTO Branch_FB
VALUES ('FB0002', 'B00004');

CREATE TABLE Branch_LB(
	LBID varchar(10),
	BID varchar(6),
	CONSTRAINT Branch_LB_PK PRIMARY KEY(LBID, BID),
	CONSTRAINT Branch_LB_FK FOREIGN KEY(BID) REFERENCES Branch(BID),
	CONSTRAINT Branch_L_B_FK FOREIGN KEY(LBID) REFERENCES Local_Booking(LBID)
);

INSERT INTO Branch_LB
VALUES ('LB0001', 'B00001');
INSERT INTO Branch_LB
VALUES ('LB0003', 'B00005');
INSERT INTO Branch_LB
VALUES ('LB0002', 'B00004');

CREATE TABLE Branch_Package(
	PKID varchar(6),
	BID varchar(6),
	CONSTRAINT Branch_Package_PK PRIMARY KEY(PKID, BID),
	CONSTRAINT Branch_Package_FK FOREIGN KEY(BID) REFERENCES Branch(BID),
	CONSTRAINT Branch_Pack_FK FOREIGN KEY(PKID) REFERENCES Package(PKID)
);

INSERT INTO Branch_Package
VALUES ('P0001', 'B00001');
INSERT INTO Branch_Package
VALUES ('P0004', 'B00005');
INSERT INTO Branch_Package
VALUES ('P0002', 'B00004');

CREATE TABLE Branch_Offer(
	OID varchar(6),
	BID varchar(6),
	CONSTRAINT Branch_Offer_PK PRIMARY KEY(OID, BID),
	CONSTRAINT Branch_offer_FK FOREIGN KEY(BID) REFERENCES Branch(BID),
	CONSTRAINT Branch_Off_FK FOREIGN KEY(OID) REFERENCES Offer(OID)
);

INSERT INTO Branch_Offer
VALUES ('O0001', 'B00001');
INSERT INTO Branch_Offer
VALUES ('O0002', 'B00003');
INSERT INTO Branch_Offer
VALUES ('O0004', 'B00005');

CREATE TABLE Branch_TG(
	TGID varchar(6),
	BID varchar(6),
	CONSTRAINT Branch_TG_PK PRIMARY KEY(TGID, BID),
	CONSTRAINT Branch_TG_FK FOREIGN KEY(TGID) REFERENCES Tour_Guide(TGID),
	CONSTRAINT Branch_T_G_FK FOREIGN KEY(BID) REFERENCES Branch(BID),
);

INSERT INTO Branch_TG
VALUES ('TG0001', 'B00001');
INSERT INTO Branch_TG
VALUES ('TG0002', 'B00003');
INSERT INTO Branch_TG
VALUES ('TG0005', 'B00004');

CREATE TABLE Branch_Payment(
	PID varchar(6),
	BID varchar(6),
	CONSTRAINT Branch_Payment_PK PRIMARY KEY(PID, BID),
	CONSTRAINT Branch_Payment_FK FOREIGN KEY(PID) REFERENCES Payment(PID),
	CONSTRAINT Branch_Pay_FK FOREIGN KEY(BID) REFERENCES Branch(BID)
);

INSERT INTO Branch_Payment
VALUES ('PM0001', 'B00004');
INSERT INTO Branch_Payment
VALUES ('PM0005', 'B00003');
INSERT INTO Branch_Payment
VALUES ('PM0004', 'B00002');

CREATE TABLE Employee(
    EID varchar(6),
    FName varchar(100) ,
    Contact_No char(10),
    BID varchar(6),
    CONSTRAINT Employee_PK PRIMARY KEY(EID),
    CONSTRAINT Employee_FK FOREIGN KEY(BID) REFERENCES Branch(BID),
    CONSTRAINT check_conta CHECK (Contact_No LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]')
);

INSERT INTO Employee
VALUES ('E00001' , 'Peris' , '0778915156', 'B00001');
INSERT INTO Employee
VALUES ('E00002' , 'Darmasena' , '0778785646', 'B00002');
INSERT INTO Employee
VALUES ('E00003' , 'Ajay' , '0783645872', 'B00003');
INSERT INTO Employee
VALUES ('E00004' , 'Kumara' , '0771265870', 'B00005');
INSERT INTO Employee
VALUES ('E00005' , 'Kamal' , '0748632456', 'B00001');

CREATE TABLE Manager(
	MID varchar(6),
	Name varchar(20),
	Contact_No char(10),
	CONSTRAINT Manager_PK PRIMARY KEY(MID),
	CONSTRAINT check_contactno CHECK (Contact_No LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]')
);

INSERT INTO Manager
VALUES('M001' , 'Kamal' , '0765498756');
INSERT INTO Manager
VALUES('M002' , 'Vimal' , '0765498766');
INSERT INTO Manager
VALUES('M003' , 'Vimukthi' , '0765498776');
INSERT INTO Manager
VALUES('M004' , 'Chamod' , '0765498786');
INSERT INTO Manager
VALUES('M005' , 'Kavi' , '0765498796');

