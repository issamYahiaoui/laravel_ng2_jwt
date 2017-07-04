import { Component, OnInit } from '@angular/core';
import {AuthService} from "../../../shared/services/auth.service";
import {NgForm} from "@angular/forms";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  constructor(
    private authService : AuthService
  ) { }

  ngOnInit() {
  }

  onLogin(f : NgForm){
    this.authService.onLogin(f.value.email, f.value.password)
      .subscribe(
        response => console.log(response) ,
        error => console.log(error)
      )
  }

}
