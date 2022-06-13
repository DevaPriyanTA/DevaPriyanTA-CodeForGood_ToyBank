import styles from "./styles.module.css";

function Home(userDetails) {
    const user = userDetails.user;
    const  logout= () =>{
        window.open(
            `${process.env.REACT_APP_API_URL}/auth/logout`,
            "_self"
        );
    };
    
    return (
        <div className = {styles.container}>
            <h1 className = {styles.heading}>HOME</h1>
            <div className = {styles.form_container}>
                <div className ={styles.left}>
                    <img className = {styles.img} src = "./images/profile.jpg" alt = "profile"></img>
                </div>
                <div className = {styles.right}>
                    <h2 className = {styles.from_heading}>Profile</h2>
                    <img src = {user.picture} alt ="profile" className={styles.profile_img}></img>
                    <input type = 'text' defaultValue={user.name} placeholder = 'Email' className = {styles.input}></input>
                    <input type = 'text' defaultValue={user.email} placeholder = 'Password' className = {styles.input}></input>
                    <button className = {styles.btn} onClick = {logout}>Log Out</button>
                </div>
            </div>
        </div>
    );
}
export default Home;