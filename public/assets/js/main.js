const url = ""
const port = 8000
const callApi = async (path,method = "GET", body = {})=>{

  const res = await fetch(url+':'+port+'/'+path+convertBody(body),{
    method,
    mode: 'cors', 
    cache: 'no-cache',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(body)
  })
  return await res.json()
}
const convertBody = (obj)=>'?'+Object.keys(obj).map(x=>`${encodeURIComponent(x)}=${encodeURIComponent(obj[x])}`).join('&')