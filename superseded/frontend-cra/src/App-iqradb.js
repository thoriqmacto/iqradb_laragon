import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import TagList from './components/TagList';
import AddTag from './components/AddTag';
import EditTag from './components/EditTag';

function App() {
  return (
    <Router>
      <div className="container">
        <Switch>
          <Route exact path="/">
            <TagList />
          </Route>
          <Route path="/add">
            <AddTag />
          </Route>
          <Route path="/edit/:id">
            <EditTag />
          </Route>
        </Switch>
      </div>
    </Router>
  );
}

export default App;
