/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from 'react';
import { useNavigate, useParams } from 'react-router-dom';
import axios from 'axios';

const EditTag = () => {
  const [tag_number, setTag_number] = useState('');
  const [tag_instrument_type, setTag_instrument_type] = useState('');
  const history = useNavigate();
  const { id } = useParams();

  const updateTag = async (e) => {
    e.preventDefault();
    await axios.patch(`http://localhost:8080/tags/${id}`, {
      tag_number: tag_number,
      tag_instrument_type: tag_instrument_type,
    });
    history.push('/');
  };

  useEffect(() => {
    getTagById();
  }, []);

  const getTagById = async () => {
    const response = await axios.get(`http://localhost:8080/tags/${id}`);
    setTag_number(response.data.tag_number);
    setTag_instrument_type(response.data.tag_instrument_type);
  };

  return (
    <div>
      <form onSubmit={updateTag}>
        <div className="field">
          <label className="label">Tag Number</label>
          <input
            type="text"
            className="input"
            value={tag_number}
            onChange={(e) => setTag_number(e.target.value)}
            placeholder="Tag Number"
          />
        </div>
        <div className="field">
          <label className="label">Instrument Type</label>
          <input
            type="text"
            className="input"
            value={tag_instrument_type}
            onChange={(e) => setTag_instrument_type(e.target.value)}
            placeholder="tag_instrument_type"
          />
        </div>
        <div className="field">
          <button className="button is-primary">Update</button>
        </div>
      </form>
    </div>
  );
};

export default EditTag;
