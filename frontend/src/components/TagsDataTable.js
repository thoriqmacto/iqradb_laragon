import React, { useState, useEffect } from 'react';
import axios from 'axios';
import DataTable from 'react-data-table-component';

const TagsDataTable = () => {
  const [data, setData] = useState([]);
  // const token = 'c8b7c80adda748dc288c31e5d95247d007b45ea11fee7af4c957d7d252c5650c';
  const totalLimit = 1000;
  const totalPage = 1;

  useEffect(() => {
    // Function to fetch data from the API
    const fetchData = async () => {
      try {
        // Make an API call using Axios
        const response = await axios.get('http://localhost:8080/api/tags',{
          params: {
            limit: totalLimit,
            page: totalPage
          }
        });
        // const response = await axios.get('http://localhost:8080/api/tags', {
        //   headers: {
        //     Authorization: `Bearer ${token}`, // Include the token in the Authorization header
        //   },
        //   params: {
        //     limit: totalLimit,
        //     page: totalPage
        //   }
        // }); // Replace with your API endpoint
        setData(response.data); // Set the fetched data to the state
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData(); // Call the fetchData function when the component mounts
  }, []);

  // Define columns for the DataTable
  const columns = [
    { name: 'ID', selector: 'id' },
    { name: 'Tag Number', selector: 'tag_number' },
    { name: 'Tag Service', selector: 'tag_service' },
    // Add other columns based on your API response structure
  ];

  return (
    <div>
      <h1>My Data Table</h1>
      <DataTable
        columns={columns}
        data={data}
        pagination // Enable pagination
        highlightOnHover // Highlight row on hover
        striped // Add striped rows
      />
    </div>
  );
};

export default TagsDataTable;