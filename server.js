const express = require('express');
const cors = require('cors');
const bodyParser = require('body-parser');
const fs = require('fs');
const app = express();
const PORT = 8000;

app.use(cors());

app.use(bodyParser.json());
const filePath = 'data.json';

const readDataFromFile = () => {
  try {
    const dataBuffer = fs.readFileSync(filePath, 'utf8');
    return dataBuffer ? JSON.parse(dataBuffer) : [];
  } catch (error) {
    console.error('Error reading or parsing data.json:', error.message);
    return [];
  }
};

let data = readDataFromFile();

app.post('/submit', (req, res) => {
  const { name, email, password } = req.body;

  if (!name || !email || !password) {
    return res.status(400).json({ error: 'All fields are required' });
  }

  
  const newUser = { name, email, password };

  data.push(newUser);

  try {
    fs.writeFileSync(filePath, JSON.stringify(data, null, 2));
    res.json({ message: 'Data submitted successfully' });
  } catch (error) {
    console.error('Error writing to data.json:', error.message);
    res.status(500).json({ error: 'Failed to save data' });
  }
});

app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});
