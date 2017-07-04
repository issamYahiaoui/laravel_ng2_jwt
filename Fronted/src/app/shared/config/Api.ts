import {Headers} from "@angular/http";
/**
 * Created by issam on 03/07/2017.
 */

  export default class Api{

  public static  Headers = new Headers({
    'Content-Type':'application/json',
    'X-Requested-With':'XMLHttpRequest'
  })
  public static Options = {
    headers : Api.Headers
  }
  public static Url ='http://localhost:8000/api'



}
