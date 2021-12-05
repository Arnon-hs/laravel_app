import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class ProductItem extends Component {

  constructor(props){
    super(props);
    this.state = { product: JSON.parse(props.product) };
  }

  render() {
    return (
          <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-4 col-sm-12 col-xl-4">
                    <img className="card-img-top" src={this.state.product.image} />
                    <h3 className="mt-2 text-center">{this.state.product.price} руб.</h3>
                </div>
                <div className="col-md-8 col-sm-12 col-xl-8">
                    <h2 className="text-center">{this.state.product.name}</h2>
                    <p className="text-center fs-16">{this.state.product.description}</p>
                </div>
                <div className="col-12">
                <h3 className="mt-2 text-center">Наличие в магазинах:</h3>
                  <table className="table">
                    <thead>
                      <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Количество</th>
                      </tr>
                    </thead>
                    <tbody>
                    {this.state.product.balance_stores.map(el => (
                      <tr key={el.id}>
                        <td>{el.store.name}</td>
                        <td>{el.store.address}</td>
                        <td>{el.count}</td>
                      </tr>
                    ))}

                    </tbody>
                  </table>
                </div>
                <div className="col-12">
                <h3 className="mt-2 text-center">Наличие на складе:</h3>
                  <table className="table">
                    <thead>
                      <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Количество</th>
                      </tr>
                    </thead>
                    <tbody>
                    {this.state.product.balance_warehouses.map(el => (
                      <tr key={el.id}>
                        <td>{el.warehouse.name}</td>
                        <td>{el.warehouse.address}</td>
                        <td>{el.count}</td>
                      </tr>
                    ))}

                    </tbody>
                  </table>
                </div>
            </div>
          </div>
    );
  }
}

if (document.getElementById('product-item')) {

    const component = document.getElementById('product-item');
    const props = Object.assign({}, component.dataset);

    ReactDOM.render(<ProductItem {...props} />, document.getElementById('product-item'));
}
