import { Component, OnInit } from '@angular/core';
import {NgForm} from "@angular/forms";
import {AuthService} from "../../../shared/services/auth.service";



@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {


  constructor(private authService : AuthService) {

  }

  onRegister(f : NgForm) {
    this.authService.onRegister(f.value.name , f.value.email, f.value.password)
      .subscribe(
        response => console.log(response)
      )
  }
  ongetUsers(){
    this.authService.getUser()
      .subscribe(
        response => console.log(response) ,
        error => console.log(error)
      )

  }
  ngOnInit() {
  }

}
