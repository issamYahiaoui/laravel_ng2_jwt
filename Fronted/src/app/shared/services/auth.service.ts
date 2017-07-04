import { Injectable } from '@angular/core';
import {Http,Response} from '@angular/http' ;
import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import {Headers} from "@angular/http";



@Injectable()
export class AuthService {

  errors : any ;
  constructor(private http : Http ) { }

  onRegister(name :string ,email:string ,password:string)
  {

     return this.http.post( 'http://localhost:8000/api/user/signup',
        {name:name,email:email,password:password}
        ,{headers: new Headers()})
  }
  getUser(){
    return this.http.get('http://localhost:8000/api/users')
  }
  onLogin(email:string,password:string){
   return this.http.post( 'http://localhost:8000/api/user/signin',
      {email:email,password:password}
     ,{headers: new Headers({ 'Content-Type':'application/json' })})
  }

  onInit(){

  }
}
