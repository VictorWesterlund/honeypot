# 🍯 Honeypot
Can the IP, HTTP Headers and more from anyone trying to log in to this site. Everything entered into this page will be saved to an SQLite database.

![44302_](https://user-images.githubusercontent.com/35688133/204114986-123a5a9a-c164-49c4-a837-43d8c6f7ba45.png)

> **Note** This project is not related to D-Link in any form or fashion. I just chose their mydlink portal as it features both IP camera and WiFi router controls from the same interface, which I intend to implement fun dummies of in the future.

## Installation

1. **Install Pragma**

   This website is built on the [Pragma web framwork](https://github.com/VictorWesterlund/pragma), and is meant as a showcase of some of it's features.
   
   [**Install the Pragma framwork**](https://github.com/VictorWesterlund/pragma)
   
2. **Clone this repo**

   Clone this repo anywhere Pragma can read its contents.
   
   ```
   $ git clone http://github.com/VictorWesterlund/honeypot
   ```
   
3. **Set env var**

   Make a copy of the `.env.example.ini` file

   ```
   $ cp -p .env.example.ini .env.ini
   ```
   
   and set the `DB_POT` variable to an absolute path to the SQLite database to create
   
   ```ini
   DB_POT="/home/me/pot.sql"
   ````
   
## Data saved

The database will dump the contents of `$_POST` and `$_SERVER` into a JSON string along with the timestamp since Unix epoch the request was received.
