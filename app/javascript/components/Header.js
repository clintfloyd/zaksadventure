import React from "react"
import PropTypes from "prop-types"
class Header extends React.Component {
  render () {
    return (
      <React.Fragment>
      	<div className="container">
        	<img src="" alt="Logo" />
        </div>
      </React.Fragment>
    );
  }
}

Header.propTypes = {
  greeting: PropTypes.string
};
export default Header
