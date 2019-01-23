const express = require("express");

var app = express();

app.use(express.static(__dirname + "/public"));

// Generic JSON data to show something on the screen
app.get("/", (req, res) => {
  res.send({
    name: "Daniel",
    likes: ["Skiing", "Hiking"]
  });
});

app.listen(3000, () => {
  console.log("Server is up on port 3000");
});
