import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom';
import axios from 'axios';

const AddTag = () => {
  const [tag_number, setTag_number] = useState('');
  const [tag_instrument_type, setTag_instrument_type] = useState('');
  const history = useNavigate();

  const saveTag = async (e) => {
    e.preventDefault();
    await axios.post('http://localhost:8080/tags', {
      tag_number: tag_number,
      tag_instrument_type: tag_instrument_type,
    });
    history.push('/');
  };

  return (
    <div>
      <form onSubmit={saveTag}>
        <div className="field">
          <label className="label">Tag Number</label>
          <input
            type="text"
            className="input"
            value={tag_number}
            onChange={(e) => setTag_number(e.target.value)}
            placeholder="Define Tag Number"
          />
        </div>
        <div className="field">
          <label className="label">Instrument Type</label>
          <input
            type="text"
            className="input"
            value={tag_instrument_type}
            onChange={(e) => setTag_instrument_type(e.target.value)}
            placeholder="Define Instrument Type"
          />
        </div>
        <div className="field">
          <button className="button is-primary">Save</button>
        </div>
      </form>
    </div>
  );
};

export default AddTag;
