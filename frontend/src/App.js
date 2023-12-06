import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import TagList from './components/TagList';
import AddTag from './components/AddTag';
import EditTag from './components/EditTag';

function App() {
  return (
    <Router>
      <div className="container">
        <Routes>
          <Route path="/" element={<TagList />} />
          <Route path="/add" element={<AddTag />} />
          <Route path="/edit/:id" element={<EditTag />} />
        </Routes>
      </div>
    </Router>
  );
}

export default App;
