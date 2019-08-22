import React from 'react';
import './css/index.css';
import SignInScreen from './components/FirebaseLogin/FirebaseLogin';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import AdminPage from './containers/AdminPage/AdminPage';

const App: React.FC = () => {
  return (
    <div className="App">
      <Router>
      <h1>marwan app</h1>
      <Link to='/admin/login' > Sign in</Link>
      <Route exact path='/admin/login' component={SignInScreen} />
      <Route exact path='/admin' component={AdminPage} />
      
      
      
      </Router>
    </div>
  );
};

export default App;
