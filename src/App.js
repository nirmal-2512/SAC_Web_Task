import React, { useState } from 'react';
import axios from 'axios';

function App() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    password: ''
  });

  const [message, setMessage] = useState('');
  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({ ...formData, [name]: value,
    });
  };
  const handleSubmit = async (e) => {
    e.preventDefault();

    try { const response = await axios.post('http://localhost:8000/submit', formData);
      setMessage(response.data.message);
    } catch (error) {
      setMessage(error.response.data.error || 'An error occurred');
    }
  };

  return (
    <div className="App">
      <h1>Submit Your Info</h1>
      <form onSubmit={handleSubmit}>
        <div>
          <label>Name:</label>
          <input
            type="text"
            name="name"
            value={formData.name}
            onChange={handleChange}
            required
          />
        </div>
        <div>
          <label>Email:</label>
          <input
            type="email"
            name="email"
            value={formData.email}
            onChange={handleChange}
            required
          />
        </div>
        <div>
          <label>Password:</label>
          <input
            type="password"
            name="password"
            value={formData.password}
            onChange={handleChange}
            required
          />
        </div>
        <button type="submit">Submit</button>
      </form>
      {message && <p>{message}</p>}
    </div>
  );
}

export default App;
