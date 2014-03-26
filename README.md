# drivewithme

Kick-Arse Car Sharing App for the World

### Contributing to drivewithme

drivewithme is an open source project and therefore relies on **you** therefore please get involved. Contributions can be made using either forking and then submitting a pull request.

### Deployment

#### Web

The web pages can be found under the wwwroot folder.

#### Database

The drivewithme app utilises mysql as the underlying database technology. The schema to initialise the database can be located in the schema folder. It is important that you run the versions that relate toe your deployment release. (See Below)

Release 1:

run DB_Schema.sql        (This is only required to be run once, it creates the initial tables)

run DB_Schema_v2.sql     (This is only required to be run once, it removes the "Email_Address" field in the users table)

run DB_Schema_v3.sql     (Only needs to be run once, this provides the stored procedures to insert a journey & return journeys)

### Bug Reports/Change Request/New Feature

All work items can be found and raised on the issue tracking pages: [Here](https://github.com/basftd/drivewithme/issues?labels=&milestone=&page=1&state=open)

Please feel free to add or comment on any issues

