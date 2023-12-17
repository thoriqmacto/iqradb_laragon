/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

const TagList = () => {
  const [tags, setTags] = useState([]);

  useEffect(() => {
    getTags();
  }, []);

  const getTags = async () => {
    const tags = await axios.get('http://localhost:8080/tags');
    setTags(tags.data);
  };

  const deleteTag = async (id) => {
    await axios.delete(`http://localhost:8080/tags/${id}`);
    getTags();
  };

  return (
    <div>
      <Link to="/add" className="button is-primary mt-5">
        Add New
      </Link>
      <table className="table is-striped is-fullwidth">
        <thead>
          <tr>
            <th>No</th>
            <th>Tag Number</th>
            <th>Instrument Type</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {tags.map((tag, index) => (
            <tr key={tag.id}>
              <td>{index + 1}</td>
              <td>{tag.tag_number}</td>
              <td>{tag.tag_instrument_type}</td>
              <td>
                <Link
                  to={`/edit/${tag.id}`}
                  className="button is-small is-info"
                >
                  Edit
                </Link>
                <button
                  onClick={() => deleteTag(tag.id)}
                  className="button is-small is-danger"
                >
                  Delete
                </button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default TagList;
