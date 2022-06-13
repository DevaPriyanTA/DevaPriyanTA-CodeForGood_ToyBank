import styles from "./styles.module.css";
import './styles.css';
function Login() {
    
    const googleAuth = () =>{
        window.open(
            `${process.env.REACT_APP_API_URL}/auth/google/callback`,
            "_self"
        );
    };
    
    return (
        <div>
            <div className = "placing">
                <p>
                    <a href="http://www.toybank.org/play">
                    <img src="./images/toybanklogo.png" width={"200px"} height = {"100px"}/>
                    </a>
                </p>
            </div>
        <div className = {styles.container}>
            <h1 className = {styles.heading}>LOG IN</h1>
            <div className = {styles.form_container}>
                <div className ={styles.left}>
                    <img className = {styles.img} src = "./images/login.jpg" alt = "login"></img>
                </div>
                <div className = {styles.right}>
                    <input type = 'text' placeholder = 'Email' className = {styles.input}></input>
                    <input type = 'text' placeholder = 'Password' className = {styles.input}></input>
                    <button className = {styles.btn}>Log In</button>
                    <p className = {styles.text}> or</p>
                    <button className = {styles.google_btn} onClick = {googleAuth}>
                        <img src = './images/google.png' alt = 'google icon'></img>
                        <span>SignIn with Google</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    );
}
export default Login;