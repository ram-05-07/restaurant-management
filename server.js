const express = require("express");
const mysql = require("mysql");
const cors = require("cors");

const app = express();
app.use(cors());
app.use(express.json());

const db = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "restaurant_db",
});

app.get("/menu", (req, res) => {
  db.query("SELECT * FROM menu", (err, result) => {
    if (err) throw err;
    res.json(result);
  });
});

app.listen(5000, () => console.log("Server running on port 5000"));
