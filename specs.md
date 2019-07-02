

=========================================================================

We need to create a simple web application for online hotel booking system. 

Stack Requirements:

- All requests should be handled by RESTful API (use Laravel Framework)
- The frontend should be implemented in any new generation js framework (e.g VueJS, AngularJS, ReactJS) as a SPA application

Admin Dashboard

1.1 Hotel Details

Fields:
- Name
- Address
- City
- State
- Country
- Zip Code
- Phone Number
- Email
- Image

Functionality:
- ability to retrieve hotel details
- ability to edit hotel details
- the system should store only one single hotel (it can be seeded)

1.2 Room Manager

Fields:
- Room Name (e.g. A1,B2, C4)
- Hotel Id (relational field)
- Room Type (relational field)
- Room Image

Functionality:
- crud actions for room manager

Note:
- All required fields should be validated 

1.3 Room Type Manager

Fields:
- Room Type Name (e.g. Deluxe, Standard)
 
Functionality:
- crud actions for room type manager

Note:
- All required fields should be validated 

1.4 Price List Manager

Fields:
You are free to structure the fields

Functionality:
- Regular Prices (ability to define prices per each room type) 
- It should provide API endpoints for crud

Notes:
- All prices should be in USD
- All required fields should be validated 

1.5 Booking Manager

Fields:
- Room Id
- Date Start
- Date End
- Customer Fullname
- Customer Email
- Total Nights (calculate from start and end dates)
- Total Price (should display price based on the condition defined in Price List Manager section)
- User_id (allow nullable value)

Functionality:
- Allow crud operations
- Allow viewing bookings in calendar mode (calendar should be filtered by month, year and display reserved dates with booking info by clicking on it)
- Add API method to allow non-registered users to add a reservation (it's related to Wordpress task)

Note:
- All required fields should be validated  

The application stores only one single user admin which should be seeded.

RESULT:

In order to complete this task follow the instructions below:

- We sent an invitation to our gitlab server. You will receive two types of emails:
1. Setting a new password notification
3. Assigned repos notification.

There are two available repos in your account: for Laravel and Wordpress tasks. You should push the code accordingly.  Please note that all changes should be committed progressively (the task with only one single commit will be marked as failed automatically). We should be able to easily see the parts you coded and differentiate it from framework code.

Don't use any other public repos, all your work should be deployed only to our gitlab server.

- In a comment to that task provide a summary of your work in English. Please, write it in a formal way as if you're talking with a client

- If you finished the task, you should mark the task as completed by clicking check icon near the title

- Stop the timer when you finish your work (the timer should be opened only when are you working on the task, otherwise you should close the timer)

NOTES:

- Create DB seeder with at least 10 rooms (make sure room types were also seeded)
- Create DB seeder with at least 10 booking records

BONUS
- covering code with unit tests and an existing README file with instructions included to the repo will increase your chance to evaluate your work higher. 
