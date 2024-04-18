import './App.css';
import BodyComp from './components/BodyComp';
import FooterComp from './components/FooterComp';
import NavBarComp from './components/NavBarComp';

function App() {
  return (
    <div className='epiFlix'>
    <NavBarComp />
    <BodyComp />
    <FooterComp />
    </div>
  );
}

export default App;
