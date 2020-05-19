# Unisex Salon Management System
 Unisex Salon Management system is to provide online appointment.  It also provide a facility to buy a product online. At the last our system will maintain all the records of customer and employee.
 ## **UNISEX SALON MANAGEMENT SYSTEM**

A project submitted to

**UKA TARSADIA UNIVERSITY**

in partial fulfillment of the requirements for the degree of

**Bachelor of Science**

in

**Information Technology**

for

**5 Years Integrated M.Sc.(IT)**

By

**SAHIL SHETHNA , BHOOMI JOSHI**

(201606100110099,201606100110113)

Guided by

**MRS.BHUMIKA PATEL**

**Assistant Professor**

![](RackMultipart20200519-4-h7qzqn_html_7d97a868323753f5.png)

**Babu Madhav Institute of Information Technology**

### **Uka Tarsadia University**

### **Bardoli – 394350**

### **May 2019**

**CERTIFICATE**

![](RackMultipart20200519-4-h7qzqn_html_7510cfa2b51df94b.jpg)

This is to certify that **Sahil Shethna [201606100110099] , Bhoomi Joshi [201606100110113]** has submitted project entitled **&quot;**** Unisex Salon Management **** System&quot;** as the partial fulfillment for the award of the degree of Bachelor of Science in Information Technology for 5 Years Integrated M.Sc.(IT) in 2018 – 2019.

**Date: 03 / 05 / 2019**

**Place: BMIIT**

**Mrs. Bhumika Patel**** Dr. Jitendra Nasriwala**

Guide Programme Coordinator,

**External Examiner**

![](RackMultipart20200519-4-h7qzqn_html_f47c7ca45643b78e.png)

**Babu Madhav Institute of Information Technology,**

**Uka Tarsadia University,**

**Bardoli – 394350**

# Acknowledgement

The success and final outcome of this project required a lot of guidance and assistance from many people and we extremely privilege to have got this all along completion of my project.

We respect and thank **Dr.Jitendra Nasriwala** , for providing us this opportunity to do the project work and giving us all support and guidance which made me complete the project duly.

We heartily thank our internal project guide , **Mrs. Bhumika Patel** , Teaching Assistant , BMIIT for his guidance and suggestions during this project work.

We are thankful to get constant encouragement , support and guidance from all teaching staffs of BMIIT which helped us in successfully completing of our project work.

Sahil Shethna [201606100110099]

Bhoomi Joshi [201606100110113]

**Table of Content**

| **Chapters** | **Particulars** | **Page no.** |
| --- | --- | --- |
| **1** | **Introduction** | 5 |
| 1.1 | Purpose | 5 |
| 1.2 | Scope | 5 |
| 1.3 | Design and Implementation Constraints | 5 |
| 1.4 | Hardware Interfaces | 6 |
| 1.5 | Software Interfaces | 6 |
| 1.6 | Communications Interfaces | 6 |
|
 |
| **2** | **System Analysis** | 7 |
| 2.1 | Identification of need | 7 |
| 2.2 | Functional Requirement | 7 |
| 2.3 | Non-functional Requirement | 10 |
| 2.4 | Modules | 10 |
| 2.5 | User Characteristics | 12 |
| 2.6 | Use case description form | 13 |
| 2.7 | Use case Diagram | 14 |
| 2.8 | Activity Diagram | 15 |
| 2.9 | Data Dictionary | 22 |
|
 |
| **3** | **User Interface Design** | 27 |
| 3.1 | Customer Interface | 27 |
|
 | 3.2 | Admin Interface | 34 |
|
 |
| **4** | **Testing** | 42 |
| 4.1 | Validation Testcase | 42 |
| 4.2 | Validation Snapshot | 45 |
|
 |
| **5** | **Future Enhancement** | 49 |
|
 |
| **6** | **References/**** Bibliography** | 50 |
| 6.1 | References | 50 |
| 6.2 | Bibliography | 50 |

#

1.
#
# **Introduction**

Unisex Salon management system is a web-based salon management with appointment scheduling. This system maintain the record of appointment, order and employee detail. An appointment contain information about services, packages and date which customer wants to take. User can take appointment and also cancel appointment online. User can also write feedback about product which they can purchase. Admin can manage and view whole system. User can do online payment for their order.

**1.1 Purpose**

The purpose of Unisex Salon Management system is to provide online appointment. It also provide a facility to buy a product online. At the last our system will maintain all the records of customer and employee.

## **1.2 Scope**

  - In our system the product delivery will not allow.
  - In our system product related to salon will get sell.
  - Cash on delivery is only way to payment for appointment because we providing platform where customers meet admin.
  - Only registered user can give feedback, if any user is not registered then they can&#39;t allow to give feedback.

## **1.3 Design and Implementation Constraints**

- This system is implemented in PHP.
- The designing is done in Bootstrap.
- The Information is stored in My SQL database where data cannot be shared in global database.

## **1.4 Hardware Interfaces**

- **Processor:**

Intel Core i3 or Higher

- **Hard Disk:**

1TB Disk Space or Higher

- **Memory:**

4GB Ram or Higher

## **1.5 Software Interfaces**

**Operating System:**

- Windows 10

**Front-end:**

- PHP
- Bootstrap
- HTML
- CSS

**Back-end:**

- My SQL as Database

**Technologies:**

- Umlet
- Xampp
- NetBeans

## **1.6 Communications Interfaces**

- Email

#
# **2.System Analysis**

## **2.1 Identification of Need**

- Presently in Unisex salon management system admin use to keeps all the record of appointment in papers. So, it increases paper work and due to this it become hard to maintain the work .
- If customer want to take appointment he/she must be visit to shop , so it takes lots of time of customer. So our system provides the facilities to manage the documents.
- If admin wants to find daily appointment then it becomes hard to find.
- Admin will be able to check report at any time in easy way.

**2.2 Functional requirements**

1. Login/register
2. Manage Employee
3. Manage appointment
4. Manage product
5. Manage service
6. Manage package
7. Manage stock
8. Manage order
9. Manage feedback
10. Reports
11. Generate bill

**2.2.1 Login/register**

### Admin must have to login in the system. Where Login is not compulsory for the customer. If user wants to take appointment or purchase any salon&#39;s product then they must have to register in the system.

**2.2.2 Manage Employee**

- This is managed by Admin.
- In this, the admin can store employee details like employee name, contact no , gender , salary details etc.
- In this, the admin can perform the following operations:
  - Add
  - Modify
  - Search

**2.2.3 Manage appointment**

- This is managed by Admin and also use by customer.
- In this, the admin can view appointment details and customer can take appointment and cancel.
- In appointment customer can add details like customer name, contact no, packages, services etc.

**2.2.4 Manage Product**

- This is managed by Admin.
- In this, the admin can store product details like product name, price, company , image, quantity etc.
- In this, the admin can perform the following operations:
  - Add
  - Modify
  - Search
  - Delete
- In this, the customer can only view the product and wants to purchase then they can.

**2.2.5 Manage Service**

- This is managed by Admin.
- In this, the admin can store service details like service name, price, type (male/female) etc.
- In this, the admin can perform the following operations:
  - Add
  - Modify
  - Search
  - Delete
- In this, the customer can only view the service details.

**2.2.6 Manage Package**

- This is managed by Admin.
- In this, the admin can store package details like package name, price, type (male/female) etc.
- In this, the admin can perform the following operations:
  - Add
  - Modify
  - Search
  - Delete
- In this, the customer can only view the package details.

**2.2.7 Manage Stock**

- This is managed by Admin.
- In this, if stock of product is over then customer can&#39;t purchase that product.

**2.2.8 Manage order**

- In this, customer can give order which product they want to purchase.
- If customer want to cancel their order then they can.
- Customer do payment for their order.
- In this, Admin can only view customer order.

**2.2.9 Manage feedback**

- In this, customer can give feedback which product they want to purchase.
- Customer can give rating for product.
- In this, Admin can only view customer feedback.

    1. **Reports**

In this, system will generate a reports. Reports like total customer, total female customer, total male customer , total todays Appointment etc.

    1. **Generate bill**

In this, system will generate a bill of customer order.

**2.3 Non-functional requirements**

- Multiple Browser compatible.
- For the security purpose the system will store password in encrypted form.(Use : md5 algorithm)

**2.4 Modules**

1. Login
2. Registration
3. Manage Admin and Employee
4. Manage Product
5. View Report
6. Manage Customer Order
7. Manage Customer appointment
8. Manage payment

**2.4.1 Login**

Admin and customer both have have login. If use the system then they must do login then they can use the system.

**2.4.2 Registration**

If customer want to purchase any product or take appointment then they must do registration.

**2.4.3 Manage Admin and Employee**

Admin can manage this module. Admin can add, update and view admin and employee.

**2.4.4 Manage Product**

Admin can add, update, delete and view the product. Customer can view the product.

**2.4.5 View Report**

System will generate the report. Admin can view the report. Report will display total no of customer, total appointment etc.

**2.4.6 Manage Customer Order**

Customer can give order which product they want to purchase and also cancel their order. Admin can view order.

**2.4.7 Manage appointment**

Customer can take appointment and also cancel appointment. Admin can view all appointment.

**2.4.8 Manage Payment**

Customer do payment online using paytm.

**2.5 User characteristics**

  **Users:**

1. Admin

2. Customer

Admin:

- Admin can login into the system and if want to change the password he/she change password.
- Admin can view customer appointment and also he/she can view customer order.
- Admin can view employee detail and modify it.
- Admin can set system package and service.
- Admin can set product details.
- Admin can view packages, services and product.
- Admin can manage stock of product.
- Admin can view customer feedback.

Customer:

- Customer can login into the system and if want to change the password he/she change password.
- Customer can view package and view product.
- Customer can purchase product.
- Customer can take appointment and if he/she want to cancel appointment he/she can.
- Customer can view their own order and if he/she want to modify then he/she can.
- Customer can give their feedback.
- Customer can pay their payment online.

## **2.6 Use Case Description**

**Table 1 Use case Description of Admin**

| **Introduction:** Use case for Admin |
| --- |
| **Actors:** Admin |
| **Precondition:** Administrator must be authorized. |
| **Postcondition:** If the use case was successful , the actor is now logged into the system. If not then the system state is unchanged. |
| **Basic Flow:**
1. Admin can sign in to the system if he/she is authorized person.
2. Admin will add the details of package, service and product also he can update and delete any details.
3. Admin will add the details of employee and admin also he/she can update any details of employee and admin .
4. Admin can manage stock.
5. Admin will show all details like package , service , product and employee.
6. Admin show the feedback regarding the system that was given by registered users.
 |
| **Alternative Flow:**
1. **Unauthorized:**
If in the basic flow the admin enters an invalid name/password the system display an error message. Admin can choose to either return to the beginning of basic flow or cancel the login at which point the use case ends.
1. **Fail to add details of Package/Service/Employee/Product:**
If in this flow admin enters invalid any detail or without fill any detail then system display an error message. |

**Table 2 Use case Description of Users**

| **Introduction:** Use case for Users |
| --- |
| **Actors:** Customer |
| **Precondition:** Customer must be authorized. |
| **Postcondition:** If the use case was successful , the actor is now logged into the system. If not then the system state is unchanged. |
| **Basic Flow:**
1. For any user , they can view packages, services and products.
2. For Customer , they can book appointment and purchase product it must be authorized.
3. Customer can view packages, services and products.
4. Only Customer can fill up the feedback regarding to the product they purchase and show feedback of other users.

 |
| **Alternative Flow:**
1. **Invalid name/password:**
If user enters invalid username/password then that customer can&#39;t book appointment.
1. User Exists:
During the use case , system will allow user to get exit at any time. Then the use case ends. |

## **2.7 Use Case Diagram**

##

![](RackMultipart20200519-4-h7qzqn_html_23250a5b74248c10.jpg)

**2.8 Activity Diagram**

**2.8.1 Login**

![](RackMultipart20200519-4-h7qzqn_html_4f19785c6ebe963d.jpg)

**2.8.2**  **Registration**

![](RackMultipart20200519-4-h7qzqn_html_ca83ec2cd7b9d568.jpg)

| **2.8****.3 Change Password Activity**
 ![](RackMultipart20200519-4-h7qzqn_html_d2eafac25dba6667.jpg)
 | **2.8****.4 Forgot Password Activity**
 ![](RackMultipart20200519-4-h7qzqn_html_4e2788ea43f4dcef.jpg) |
| --- | --- |

**2.8****.5 Activity Diagram for Appointment**

![](RackMultipart20200519-4-h7qzqn_html_d1464b2b991e84ef.jpg)

**2.8.6 Activity Diagram for Manage Product**

![](RackMultipart20200519-4-h7qzqn_html_357233d8aecb9e4d.jpg)

**2.8.7 Activity Diagram for Manage Package**

![](RackMultipart20200519-4-h7qzqn_html_ff9bd6b228370410.jpg)

**2.8.8 Activity Diagram for Manage Service**

![](RackMultipart20200519-4-h7qzqn_html_f6e6da634ef48b4c.jpg)

**2.8.9 Activity Diagram for Manage Employee**

![](RackMultipart20200519-4-h7qzqn_html_4d59eb3f6ae87253.jpg)

**2.8.10 Activity Diagram for Manage Order**

![](RackMultipart20200519-4-h7qzqn_html_d1bbd4cce5cce8a2.jpg)

**2.8.11 Activity Diagram for Feedback**

![](RackMultipart20200519-4-h7qzqn_html_4474525bd5530fd2.jpg)

##

##

##

##

##

##

##

## **2.9 Data Dictionary**

| **Attribute name** | **Datatype** | **Constrain** | **Description** |
| --- | --- | --- | --- |
| user\_id | Int | Primary key | Store user id |
| Name | varchar(50) | Not null | Store user name |
| Password | varchar(150) | Not null | Store user password Using md5 algorithm |
| Email | varchar(255) | Unique key | Store email id of user which is unique. |
| contact\_no | Varchar(10) | Not null | Store user contact no |
| Gender | varchar(1) | Not null | Store user gender |
| Address | Varchar(150) | Not null | Store user address |
| Type | Varchar(8) | Not null | Store user type.User is customer or Admin |

**2.9.1 Table Name : tbl\_user**

**Table description: This table stores Customer and admin details.**

**2.9.2**  **Table Name :**  **tbl\_employee**

**Table description: This table stores employee details.**

| **Attribute name** | **Datatype** | **Constrain** | **Description** |
| --- | --- | --- | --- |
| employee\_id | Int | Primary key | Store employee id |
| Name | varchar(50) | Not null | Store employee name |
| Email | varchar(255) | Unique key | Store email id of employee |
| contact\_no | Varchar(10) | Not null | Store employee contact no |
| Gender | varchar(1) | Not null | Store employee gender |
| Address | Varchar(150) | Not null | Store employee address |
| Salary | Int | Not null | Store employee salary |

**2.9.3**  **Table Name :**** tbl\_product\_category**

**Table description: This table stores Product Category details.**

| **Attribute name** | **Datatype** | **constrain** | **Description** |
| --- | --- | --- | --- |
| product\_id | Int | Primary key | Store product id |
| product\_name | varchar(50) | Not null | Store product name |

**2.9.4**  **Table Name :**** tbl\_service**

**Table description: This table stores Salon Services details.**

| **Attribute name** | **Datatype** | **constrain** | **Description** |
| --- | --- | --- | --- |
| **service\_id** | Int | Primary key | Store Service id |
| **service\_name** | varchar(50) | Not null | Store Service name |

**2.9.5**  **Table Name :**** tbl\_package**

**Table description: This table stores Salon Packages details.**

| **Attribute name** | **Datatype** | **Constrain** | **Description** |
| --- | --- | --- | --- |
| **package\_id** | Int | Primary key | Store package id |
| **package\_name** | varchar(50) | Not null | Store package name |
| **Description** | varchar(150) | Not null | Store package description |
| **package\_price** | Int | Not null | Store price of package |

**2.9.6**  **Table Name :**  **tbl\_supplier**

**Table description: This table stores Product Supplier details.**

| **Attribute name** | **Datatype** | **Constrain** | **Description** |
| --- | --- | --- | --- |
| **supplier\_id** | Int | Primary key | Store supplier id |
| **supplier\_name** | varchar(50) | Not null | Store supplier name |
| **supplier\_contactno** | Varchar(10) | Not null | Store supplier contactno |
| **supplier\_address** | varchar(150) | Not null | Store price of supplier |

**2.9.7**  **Table Name :**  **tbl\_company**

**Table description: This table stores Product Company details.**

| **Attribute name** | **Datatype** | **Constrain** | **Description** |
| --- | --- | --- | --- |
| **company\_id** | Int | Primary key | Store Company id |
| **company\_name** | varchar(50) | Not null | Store Company name |

**2.9.8**  **Table Name :**  **tbl\_subProduct\_category**

**Table description: This table stores Sub Product Category details.**

| **Attribute name** | **Datatype** | **Constrain** | **Description** |
| --- | --- | --- | --- |
| **subProduct\_id** | Int | Primary key | Store sub product id |
| **product\_id** | Int | Foreign key | Store product id |
| **subProduct\_name** | varchar(150) | Not null | Store sub product name |
| **company\_id** | Int | Foreign key | Store company id |
| **price** | Int | Not null | Store sub product Price |
| **Type** | varchar(1) | Not null | Store sub product type. It is for male or female |
| **Qty** | Int | Not null | Store sub product quantity |
| **Image** | Blob | Not null | Store user type.User is customer or Admin |
| **supplier\_id** | Int | Foreign key | Store supplier id |

**2.9.9**  **Table Name :**  **tbl\_subService**

**Table description: This table stores subservice details.**

| **Attribute name** | **Datatype** | **constrain** | **Description** |
| --- | --- | --- | --- |
| **subservice\_id** | Int | Primary key | Store sub service id |
| **service\_id** | Int | Foreign key | Store service id |
| **subService\_name** | Varchar(50) | Not null | Store sub service name |
| **subService\_price** | price | Not null | Store sub service price |
| **Type** | varchar(1) | Not null | Store sub service type. It is for male or female |

**2.9.10**  **Table Name :**  **tbl\_Appointment\_order**

**Table description: This table stores Appointment order details.**

| **Attribute name** | **Datatype** | **constrain** | **Description** |
| --- | --- | --- | --- |
| **appointment\_id** | Int | Primary key | Store appointment id |
| **service\_id** | Int | Foreign key | Store service id |
| **package\_id** | int | Foreign key | Store package id |
| **user\_id** | Int | Foreign key | Store user id |
| **Appointment\_date** | Date | Not null | Store appointment date when customer wants to take an appointment date |
| **Appointment\_time** | Time | Not null | Store appointment time when customer wants to take an appointment time |

**2.9.11**  **Table Name :**  **tbl\_tempcart**

**Table description: This table stores cart details.**

| **Attribute name** | **Datatype** | **constrain** | **Description** |
| --- | --- | --- | --- |
| **tempcart\_id** | Int | Primary key | Store temp cart id |
| **product\_id** | Int | Foreign key | Store product id |
| **user\_id** | Int | Foreign key | Store user id |
| **Qty** | Int | Not null | Store quantity which user want to order |

**2.9.12**  **Table Name :**  **tbl\_bill**

**Table description: This table stores Bill details.**

| **Attribute name** | **Datatype** | **constrain** | **Description** |
| --- | --- | --- | --- |
| **bill\_id** | Int | Primary key | Store bill id |
| **user\_id** | Int | Foreign key | Store user id |
| **order\_date\_time** | Datetime | Not null | Store date and time of order |
| **total\_amount** | Int | Not null | Store product total amount |

**2.9.13**  **Table Name :**  **tbl\_order**

**Table description: This table stores order details.**

| **Attribute name** | **Datatype** | **Constrain** | **Description** |
| --- | --- | --- | --- |
| **order\_id** | Int | Primary key | Store order id |
| **bill\_id** | Int | Foreign key | Store bill id |
| **subProduct\_id** | Int | Foreign key | Store subProduct id |
| **Qty** | Int | Not null | Store quantity which user want to order |
| **Amount** | Int | Not null | Store product amount |

**2.9.14**  **Table Name :**  **tbl\_feedback**

**Table description: This table stores Feedback details.**

| **Attribute name** | **Datatype** | **Constrain** | **Description** |
| --- | --- | --- | --- |
| **feedback\_id** | Int | Primary key | Store feedback id |
| **user\_id** | Int | Foreign key | Store user id |
| **SubProduct\_id** | Int | Foreign key | Store product id |
| **Rating** | Float | Not null | Store rating which given by user |
| **Feedback** | Varchar(100) | Not null | store feedback which given by user |
| **Status** | Varchar(10) | Not null | store status which is completed or pending |

1.
#
# **User Interface Design**

**3.1Customer Interface**

## **3.1.1 Home page**

![](RackMultipart20200519-4-h7qzqn_html_3f253d4773998785.png)

The above picture shows user interface of customer home Screen.

## **3.1.2 About us**

![](RackMultipart20200519-4-h7qzqn_html_1c6da2fa2e542d47.png)

The above picture shows user interface of about us Screen

## **3. 1.3 Service**

![](RackMultipart20200519-4-h7qzqn_html_a70075c39b86d75f.png)

The above picture shows user interface of salon&#39;s services Screen

## **3. 1.4 Package**

![](RackMultipart20200519-4-h7qzqn_html_29af6c64106625e3.png)

The above picture shows user interface of salon&#39;s packages Screen

##

## **3. 1.5 Appointment**

![](RackMultipart20200519-4-h7qzqn_html_42a557237b93824d.png)

The above picture shows user interface of appointment booking Screen

## **3. 1.6 Gallery**

![](RackMultipart20200519-4-h7qzqn_html_7c0fd18fe8f17400.png)

The above picture shows user interface of salon&#39;s gallery Screen

## **3. 1.5 Shop**

![](RackMultipart20200519-4-h7qzqn_html_fac95f08f7b5b7fa.png)

The above picture shows user interface of view product Screen

## **3. 1.6 Edit Profile**

![](RackMultipart20200519-4-h7qzqn_html_833daa7af7d961b4.png)

The above picture shows user interface of Customer Account Details screen.

## **3. 1.7 Change Password**

![](RackMultipart20200519-4-h7qzqn_html_35c037d82e43ee4.png)

The above picture shows user interface of customer change password Screen

## **3. 1.8 Cart**

![](RackMultipart20200519-4-h7qzqn_html_8d341cc143e6d26d.png)

The above picture shows user interface of Cart screen.

## **3. 1.8 My Order**

![](RackMultipart20200519-4-h7qzqn_html_866b97d740c2ffa.png)

The above picture shows user interface of all customer order Screen

1.
## **1.9 Sign Up**

![](RackMultipart20200519-4-h7qzqn_html_f323486411b3aabd.png)

The above picture shows user interface of login screen of Customer and admin.

## **3. 1.10 Sign in**

![](RackMultipart20200519-4-h7qzqn_html_284294a250412d3d.png)

The above picture shows user interface of Customer Registration screen.

## **3. 1.11 Location**

![](RackMultipart20200519-4-h7qzqn_html_8aa3f58a94564ef6.png)

The above picture shows user interface of shop location on map Screen

    1.
## **Forget Password**

![](RackMultipart20200519-4-h7qzqn_html_7273f6a49ff9a4b6.png)

The above picture shows user interface of customer forget password Screen

**3.2**  **Admin Interface**

## **3.2.1 Employee Registration Form**

![](RackMultipart20200519-4-h7qzqn_html_eadc5555d02ee6fc.png)

The above picture shows user interface of Employee Registration Screen

## **3.2.1 Update Employee Details**

![](RackMultipart20200519-4-h7qzqn_html_10917e5cee331a80.png)

The above picture shows user interface of update employee details Screen

## **3.2.3 Employee Details**

![](RackMultipart20200519-4-h7qzqn_html_acc81a1daa2f7e2.png)

The above picture shows user interface of employee details Screen

## **3.2.4 Admin Registration Form**

![](RackMultipart20200519-4-h7qzqn_html_c1db27a6351d7e67.png)

The above picture shows user interface of admin registration form Screen

## **3.2.5 Admin Details**

![](RackMultipart20200519-4-h7qzqn_html_9e78efa57e8f690.png)

The above picture shows user interface of admin details Screen

## **3.2.6 Add New Sub-Services**

![](RackMultipart20200519-4-h7qzqn_html_35ab42c8d5ca19b7.png)

The above picture shows user interface of add new sub service Screen

## **3.2.7 Select Services/package for add**

![](RackMultipart20200519-4-h7qzqn_html_5611e2907b19332f.png)

The above picture shows user interface of selection for add new service or package Screen

**3.2.8 Add New package**

![](RackMultipart20200519-4-h7qzqn_html_3a203ae31ef728ab.png)

The above picture shows user interface of add new package Screen

**3.2.9 View Services**

![](RackMultipart20200519-4-h7qzqn_html_fc4dab7ff1a4731f.png)

The above picture shows user interface of view service Screen

**3.2.10 View Packages**

![](RackMultipart20200519-4-h7qzqn_html_81a1ef24f8e2fb09.png)

The above picture shows user interface of view packages Screen

**3.2.11 Add Product/Sub-Product**

![](RackMultipart20200519-4-h7qzqn_html_ec9df0c9d93fbcd.png)

# The above picture shows user interface of Add Product/Sub-Product Screen

**3.2.12 View Sub-Product**

![](RackMultipart20200519-4-h7qzqn_html_6eb18660e9477cc2.png)

The above picture shows user interface of view sub product Screen

**3.2.13 Change password**

![](RackMultipart20200519-4-h7qzqn_html_3f86d82140394cb1.png)

The above picture shows user interface of Admin change password Screen

**3.2.14 Admin Dashboard**

![](RackMultipart20200519-4-h7qzqn_html_7d55fe7f96c53514.png)

The above picture shows user interface of Admin Dashboard Screen

# **4 Testing**

## **4.1 Validation Testcase**

### **4.1.1 Test Case for Login:**

| **Test Case Number** | **Description** | **Input Value** | **Expected Output** | **Actual Output** | **Result** |
| --- | --- | --- | --- | --- | --- |
| **TC1** | Login | Username = &quot;ABC123&quot;Password=&quot;\*\*\*&quot; | Error message | Login | Fail |
| **TC 2** | Login | Username=[XYZ@gmail.com](mailto:XYZ@gmail.com)Password=&quot;\*\*\*\*\*\*\*\*&quot; | Redirect to Successful Page | Login | Pass |

**4.1.2**  **Test Case of Appointment:**

| **Test Case Number** | **Input Value** | **Expected Output** | **Actual Output** | **Result** |
| --- | --- | --- | --- | --- |
| TC 1 | Service name=&quot; &quot; | Error message | Not accept | Fail |
| TC 2 | Service name=&quot; Hair&quot; | Accept | Accept | Pass |
| TC 3 | Package=&quot; &quot; | Error message | Not accept | Fail |
| TC 4 | Package=&quot;Just for me&quot; | Accept | Accept | Pass |
| TC 5 | Appointment date=&quot; &quot; | Error message | Not Accept | Fail |
| TC 6 | Appointment date=&quot;2019-01-01&quot; | Accept | Accept | Pass |
| TC 7 | Appointment time=&quot; &quot; | Error message | Not accept | Fail |
| TC 8 | Appointment time=&quot;1:00 to 2:00&quot; | Accept | Accept | Pass |

**4.1.3**  **Test Case of Registration:**

| **Test Case Number** | **Input Value** | **Expected Output** | **Actual Output** | **Result** |
| --- | --- | --- | --- | --- |
| TC 1 | User name=&quot; &quot; | Error message | Not accept | Fail |
| TC 2 | User name=&quot;XYZ &quot; | Accept | Accept | Pass |
| TC 3 | Address=&quot; &quot; | Error message | Not accepted | Fail |
| TC 4 | Address=&quot;177,new Shiv Shakti row house ,Surat&quot; | Accept | Accept | Pass |
| TC 5 | Phone number=&quot;123456789&quot; | Error message | Not accept | Fail |
| TC 6 | Phone number=&quot;7434086287&quot; | Accept | Accept | Pass |
| TC 7 | Email=&quot; &quot; | Error message | Accept | Fail |
| TC 8 | Email=&quot;XYZ@gmail.com&quot; | Accept | Accept | Pass |
| TC 9 | Password=&quot; &quot; | Error message | Not accept | Fail |
| TC 10 | Password=&quot;\*\*\*\*\*\*\*&quot; | Accept | Accept | Pass |
| TC 11 | Confirm password=&quot; &quot; | Error message | Not accept | Fail |
| TC 12 | Confirm password=&quot;\*\*\*\*\*\*\*&quot; | Accept | Accept | Pass |

**4.1.4**  **Test Case of Manage sub Product:**

| **Test Case Number** | **Input Value** | **Expected Output** | **Actual Output** | **Result** |
| --- | --- | --- | --- | --- |
| TC 1 | Sub product name=&quot; &quot; | Error message | Not accept | Fail |
| TC 2 | Sub product name=&quot; Shampoo&quot; | Accept | Accept | Pass |
| TC 3 | Company name=&quot; &quot; | Error message | Not accept | Fail |
| TC 4 | Company name=&quot;Loreal&quot; | Accept | Accept | Pass |
| TC 5 | Price =&quot; &quot; | Error message | Not Accept | Fail |
| TC 6 | Price=&quot;2000&quot; | Accept | Accept | Pass |
| TC 7 | quantity=&quot; &quot; | Error message | Not accept | Fail |
| TC 8 | Quantity=&quot;6&quot; | Accept | Accept | Pass |

**4.1.5**  **Test Case of Add to cart:**

| **Test Case Number** | **Input Value** | **Expected Output** | **Actual Output** | **Result** |
| --- | --- | --- | --- | --- |
| TC 1 | Add to cart=&quot; &quot; | Error message | Not accept | Fail |
| TC 2 | Add to cart=&quot; Enter on cart which product you want to add&quot; | Accept | Accept | Pass |
| TC 3 | checkout=&quot; &quot; | Error message | Not accept | Fail |
| TC 4 | checkout=&quot;Enter on checkout button&quot; | Accept | Accept | Pass |
| TC 5 | Pay with paytm=&quot; &quot; | Error message | Not Accept | Fail |
| TC 6 | Pay with paytm=&quot;Enter on pay with paytm button&quot; | Accept | Accept | Pass |

## **4.2 Validation snapshot**

**4.2.1 login**

![](RackMultipart20200519-4-h7qzqn_html_26577f0c2bbb0dd1.png)

The above picture shows user interface of login validation Screen

**4.2.2**  **Invalid OTP**

![](RackMultipart20200519-4-h7qzqn_html_98896232f1ce06f6.png)

The above picture shows user interface of invalid OTP Screen

**4.2.3**  **Email id already exist**

![](RackMultipart20200519-4-h7qzqn_html_77cd7f7a90267320.png)

The above picture shows user interface of email id already exist Screen

**4.2.4**  **Send OTP**

![](RackMultipart20200519-4-h7qzqn_html_de93a8f7c1cb96c5.png)

The above picture shows user interface of send OTP Screen

**4.2.5**  **Password not match**

![](RackMultipart20200519-4-h7qzqn_html_451b81316b8db513.png)

The above picture shows user interface of password not match Screen

**4.2.6**  **Password pattern**

![](RackMultipart20200519-4-h7qzqn_html_fb03dd9d7e31eb7d.png)

The above picture shows user interface of password pattern Screen

**4.2.7**  **OTP verification**

![](RackMultipart20200519-4-h7qzqn_html_eb9d65ed99b3f107.png)

The above picture shows user interface of OTP verification Screen

**4.2.8**  **If you direct go for appointment booking**

![](RackMultipart20200519-4-h7qzqn_html_974335b4249be6d1.png)

The above picture shows user interface of If you direct go for appointment booking Screen

#
# **5 Future Enhancement**

Our project has covered almost all the requirements. Basically our system reduce the manual work and problems with it. Well, I and my team member found that we can do this work in much better and accurate manner so, the project will be updated in near future. The following are the future scope of our project:

1. We will provide home delivery for product.

#
# **6 References/Bibliography**

## **6.1 References:**

- Singh Y.Malhotra R. , Object Oriented Software Engineering , PHI.
- Steve Holzner, The complete reference PHP, Mc Grew Hill[SH].

## **6.2 Bibliography:**

- [https://getbootstrap.com/](https://getbootstrap.com/)
- [https://homesalonservice.com](https://homesalonservice.com/)
- [https://www.w3schools.com/](https://www.w3schools.com/)

#
