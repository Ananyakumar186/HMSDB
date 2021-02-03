create schema hmsdb;
create table  logintb (
	username varchar(15),
    password varchar(10)
);



select * from logintb;
create table DOCTOR (
	doc_id  varchar(10) primary key,
    doc_name varchar(25),
    phoneno varchar(20),
    qualification varchar(10),
    area_of_exp varchar(10),
    available varchar(10)
    );
    
create table PATIENT(
		pat_id varchar(15) primary key,
		fname varchar(40),
        lname varchar(40), 
        age varchar(10),
        weight varchar(10),
        gender varchar(10),
        phoneNo varchar(12),
        disease varchar(20),
        address varchar(100),
        medicine varchar(100),
        patType varchar(10)
        );


SELECT * FROM PATIENT;   
SELECT * FROM medicalrecord;
SELECT* FROM appointment;
SELECT* FROM NURSE;
SELECT * from DOCTOR;

create table appointment(
		app_id varchar(5),
        pat_id varchar(15),
        doc_id varchar(15),
        admDate date,
        primary key(pat_id,app_id,doc_id),
        foreign key(pat_id) references patient(pat_id) on delete cascade );

create table NURSE (
    nur_id varchar(10) primary key,
    nur_name varchar(30),
    nur_phone varchar(12),
    nur_quali varchar(10) );        

create table medicalrecord(
    record_id varchar(5) ,
    pat_id varchar(15),
    doc_id varchar(15),
    admDate date,
    disDate date,
    roomNo INT,
    bedNo INT,
    infoillness varchar(200),
    medicine varchar(100),
    primary key(record_id,pat_id,doc_id),
    foreign key (pat_id) references PATIENT(pat_id),
    foreign key(doc_id) references DOCTOR(doc_id)
);


INSERT INTO PATIENT(pat_id,fname,lname,age,weight,gender,phoneNo,disease,address,medicine,patType) VALUES('5fd1b327bb543','ananya','kumar','21','68','Male','9845369580','fever','Devraj urs nagar','paracetamol','Indoor');
INSERT INTO nurse VALUES('1','Shanbavi S','9872513542','Bsc');
insert into logintb values('admin','pass');


CREATE DEFINER=`root`@`localhost` PROCEDURE `updateRecord`( recordID varchar(5) , admidate date , disdate date ,roomno int , bedno int , medi varchar(100) , ill varchar(200) )
BEGIN
UPDATE medicalrecord SET admDate = admidate , disDate = disdate  , roomNo = roomno , bedNo = bedno , medicine = medi , infoillness =  ill WHERE record_id=recordID;
END