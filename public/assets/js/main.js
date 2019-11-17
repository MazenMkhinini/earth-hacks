const url = "http://localhost"
const port = 3000
const callApi = async (path,method = "GET", body = {})=>{
  let res = null
  if(method="GET")
    res = await fetch(url+':'+port+'/api'+path+convertBody(body),{
      method,
      mode: 'cors', 
      cache: 'no-cache',
      headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': '*'
      },
      // body: JSON.stringify(body)
    })
  else
  res = await fetch(url+':'+port+'/api'+path+convertBody(body),{
    method,
    mode: 'cors', 
    cache: 'no-cache',
    headers: {
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin': '*'
    },
    body: JSON.stringify(body)
  })
  console.log(res)
  return await res.json()
}
const convertBody = (obj)=>'?'+Object.keys(obj).map(x=>`${encodeURIComponent(x)}=${encodeURIComponent(obj[x])}`).join('&')