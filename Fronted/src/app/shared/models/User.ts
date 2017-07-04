export default class User {

  /** **/
  private _name:String;
  private _email:String;
  private _password:String;
  /** **/
  constructor(name: String, email: String, password: String) {
    this._name = name;
    this._email = email;
    this._password = password;
  }
  get name(): String {
    return this._name;
  }

  set name(value: String) {
    this._name = value;
  }

  get email(): String {
    return this._email;
  }

  set email(value: String) {
    this._email = value;
  }

  get password(): String {
    return this._password;
  }

  set password(value: String) {
    this._password = value;
  }


}

