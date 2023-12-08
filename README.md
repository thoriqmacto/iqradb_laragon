# iQRAdb (Instrument Quick Reference Application Database)

This is iQRA db, a web application for instrumentation and control engineer. It is running on very minimum web server requirements (deploy in shared hosting server) due to limited budget.

## Prerequisites

- Laragon
- Tested and confirmed working on:
  - Windows 11 Version 22H2 build 22621.2715
- CodeIgniter 4

## Additional Notes

- Docker setup tutorial follow guide from this blog post: https://avenir.ro/codeigniter-4-using-docker-apache-mysql/
- Laragon setup tutorial follow this guide: https://avenir.ro/codeigniter-4-development-laragon/

## Todo List

1. [DONE][2023-12-02] CodeIgniter 4 installed and ready for development using Laragon environment.
1. [DONE][2023-12-02] Load instrument index example.
1. [DONE][2023-12-02] Create CRUD facilities for it.
1. [2023-12-02] Create schema DB (LOOP to TAG) relationship as per windows apps using ORM for first try.
1. [DONE][2023-12-04] Create RESTful CRUD access for TAGS.
1. [DONE][2023-12-04] Create front-end for TAGS using React (simple react-router).
1. [DONE][2023-12-07] Implement datatable.js as template for table presentation.
1. [2023-12-07] Install dashboard template.
1. [2023-12-07] Create USERS and ROLES table. (*) Possibly change with CodeIgniter Shield 
1. [2023-12-07] Create basic authentication for accessing dashboard (USER manage). (*) Possibly change with CodeIgniter Shield 
1. [2023-12-07] Create another authentication using one-time password send to email. (*) Possibly change with CodeIgniter Shield 
1. [2023-12-07] Implement pdf creation from library.
1. [2023-12-07] Create page for URV and LRV transmitter calculation.
1. [2023-12-07] Try deploy to live server (#1 Milestone).
1. [2023-12-07] Build project based structure with each individual project will have all required tables such as: TAGS, LOOPS, CMS_SYSTEM_NUMBERS, etc.
1. [DONE][2023-12-08] Authenticate api request using token.
1. ...

## Feature Done

1. [2023-12-02] CodeIgniter 4 installed and ready for development using Laragon environment.
1. [2023-12-06] Load instrument index example.
1. [2023-12-06] Create CRUD facilities for it.
1. [2023-12-06] Create RESTful CRUD access for TAGS.
1. [2023-12-06] Create front-end for TAGS using React (simple react-router).
1. [2023-12-07] Authenticate api request using token.
1. [2023-12-08] Implement datatable.js as template for table presentation.
1. ...
