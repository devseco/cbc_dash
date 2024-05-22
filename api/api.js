const API_DOMAIN = 'https://127.0.0.1:3000';
class APIService {
  static getAllUsers() {
    console.log("111");
    return fetch(`${API_DOMAIN}/allusers`)
      .then(response => response.json())
      .then(data => {
        console.log(data);
        return data;
      })
      .catch(error => {
        
        console.error('Error fetching users:', error);
        throw error;
      });
  }

  static postData(data) {
    return fetch(`${API_DOMAIN}/api/data`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      return data;
    })
    .catch(error => {
      console.error('Error posting data:', error);
      throw error;
    });
  }
}