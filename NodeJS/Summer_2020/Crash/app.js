const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  const output = `<!DOCTYPE html>
  <html lang="en">
  <head>
  
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- Bootstrap CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet" >
      <meta charset="UTF-8">
      <title>Title</title>
  </head>
  <body>
      <div class="ex-1"  style="margin: 2em;">
          <div class="container" style="border: 1px solid black;">
              <h1 style="text-align: center; margin: 1em;" >WebSite Online</h1>  
              <ol type="1">
                          <li> Home Page</li>
                      <li> Link Page</li>
                      <ol type="I">
                          <li> Check</li>
                          <li> Check</li>
                          <ol type="A">
                              <li>News Site</li>
      
                              <ol type="i">
                                  <li>TV</li>
                                  <ol type="a">
                                      <li>
                                     Cnn     
                                      </li>
                                      <li>
                                          Headlines     
                                           </li>
                                  </ol>
                              </ol>
                              <li>Stock Site</li>
                          </ol>
                          <li>Link to Site</li>
                      </ol>
                      <li>Contact Page</li>
      
              </ol>
          </div>
      </div>
      
      <div class="ex-2"  style="margin: 2em;">
          <div class="container" style="border: 1px solid black;">
  
              <form action="dot.php" method="GET" >
                  <div>
                      <image src="workplace.jpg"></image>
                  </div>
                  <div >
                      <label style="margin:1em; width: 100px;">Name</label> 
                      <input type="text" name="user_dot">
                      
                  </div>    
                  <div >
                      <label style="margin:1em; width: 100px;">Password</label> 
                      <input type="password"  name="pass_dot">
                  </div>
                  <div  style=" width: 100%; margin-left: 3em;">
                          <input type="submit">
                          <input type="button" value="Cancel">               
                  </div>
              </form>
              
              
          </div>
      </div>
      
      <div class="ex-3"  style="margin: 2em;">
          <div class="container" style="border: 1px solid black;">
          <table border="1" padding="2em" > 
              <tr>
                  <td rowspan="4">this is ok </td>
              </tr>
                  <tr>
                      <td>1</td>
  
                      <td>Dot</td>
                      
                      <td>Dot@gmail.com</td>
                  </tr>
                  <tr>
                      <td>1</td>
  
                      <td>Dot</td>
                      
                      <td>Dot@gmail.com</td>
                  </tr>
                  <tr>
                      <td>1</td>
  
                      <td>Dot</td>
                      
                      <td>Dot@gmail.com</td>
                  </tr>
                  
              </table>
          </div>
  
      </div>
  
      <div class="ex-4"  style="margin: 2em;">
          <div class="container" style="border: 1px solid black;">
              <table border="1" >
                  <tr>
                      <td rowspan="2"></td>
                      <td colspan="3">Friut Juice Drink
                      </td>
                  </tr>
                  <tr>
                      <td> Apple</td>
                      <td> Apple</td>
                      <td> Apple</td>
                  </tr>
                  
                  <tr>
                      
                      <td>Time
      
                      </td>
                      <td>1</td>
                      <td> 1</td>
                      <td> 1</td>
                  </tr>
                  
                  <tr>
                      
                      <td>Time
      
                      </td>
                      <td>1</td>
                      <td> 1</td>
                      <td> 1</td>
                  </tr>
                  <tr>
                      
                      <td>Time
      
                      </td>
                      <td>1</td>
                      <td> 1</td>
                      <td> 1</td>
                  </tr>
              </table>
          </div>
      </div>
  
      
  </body>
  </html>
  `;
  res.end(output);


});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
  
});