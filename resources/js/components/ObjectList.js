import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ObjectComponent from './Object';

export default class ObjectList extends Component {
  render() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                {JSON.parse(this.props.objects).map((el) => <ObjectComponent object={el} key={el.id} />)}
            </div>
        </div>
    );
  }
}

if (document.getElementById('object-list')) {

    const component = document.getElementById('object-list');
    const props = Object.assign({}, component.dataset);
    console.log(JSON.parse(props.objects))

    ReactDOM.render(<ObjectList {...props} />, document.getElementById('object-list'));
}
