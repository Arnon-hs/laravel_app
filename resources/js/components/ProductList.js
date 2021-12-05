import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import  Product  from './Product';

export default class ProductList extends Component {
  render() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                {JSON.parse(this.props.products).map((el) => <Product product={el} key={el.id} />)}
            </div>
        </div>
    );
  }
}

if (document.getElementById('product-list')) {

    const component = document.getElementById('product-list');
    const props = Object.assign({}, component.dataset);
    console.log(JSON.parse(props.products))

    ReactDOM.render(<ProductList {...props} />, document.getElementById('product-list'));
}
