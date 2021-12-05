import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ObjectComponent extends Component {

  constructor(props){
    super(props);
    console.log(this.props.object);
  }

  render() {
    return (
          <div className="col-md-6 col-sm-12 col-xl-4">
            <div className="card">
              <img className="card-img-top" src={this.props.object.image} />
              <div className="card-body">
                <h5 className="card-title">{this.props.object.name}</h5>
                <p className="card-text">{this.props.object.address}</p>
                <a href={"/"+this.props.object.type+"/"+this.props.object.id} className="btn btn-primary">Посмотреть</a>
              </div>
            </div>
          </div>
    );
  }
}

if (document.getElementById('object')) {

    const component = document.getElementById('object');
    const props = Object.assign({}, component.dataset);

    ReactDOM.render(<ObjectComponent {...props} />, document.getElementById('object'));
}
