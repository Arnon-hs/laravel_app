import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class Product extends Component {

  constructor(props){
    super(props);
    console.log(props, 1, this.props);
  }

  render() {
    return (
          <div className="col-md-4 col-sm-6 col-xl-3">
            <div className="card">
              <img className="card-img-top" src={this.props.product.image} />
              <div className="card-body">
                <h5 className="card-title">{this.props.product.name}</h5>
                <p className="card-text">{this.props.product.description}</p>
                <a href="#" className="btn btn-primary">Посмотреть</a>
              </div>
            </div>
          </div>
    );
  }
}

if (document.getElementById('product')) {

    const component = document.getElementById('product');
    const props = Object.assign({}, component.dataset);
    console.log(JSON.parse(props), 'product')

    ReactDOM.render(<Product {...props} />, document.getElementById('product'));
}
