
        class Gugudan extends React.Component{
            
            constructor(props){
                super(props);
                this.state={
                    first : Math.ceil(Math.random()*9),
                    second : Math.ceil(Math.random()*9),
                    value : '',
                    result : '',
                };
            }
            
            render(){
                return (
                    <div>
                        <div>{this.state.first}곱하기{this.state.second}는?</div>
                        <form>
                            <input type="number" value={this.state.value} onChange={(e)=>this.setState({value : e.target.value})}/>
                            <button>출력!</button>
                            
                        </form>
                        <div>{this.state.result}</div>

                    </div>
                    
                );
            }
        }


        ReactDOM.render(<Gugudan />,document.querySelector('#root'));