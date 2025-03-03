
const setInvalid = (input) => {
    if (!input.classList.contains("invalid-input")){
        input.classList.add("invalid-input");
        input.classList.remove("valid-input");
    }
}

const setValid = (input) => {
    if(!input.classList.contains("valid-input")){
        input.classList.remove("invalid-input");
        input.classList.add("valid-input");
    };
}

/*const setValid = (input) => {
    const inputs = document.getElementsByClassName("invalid-input");
    [...inputs].forEach(input => {
        input.classList.remove("invalid-input");
        input.classList.add("valid-input");
    });
}*/ // for test

const validateElements = () => {
    let valid=true;
    const forms = document.forms["myform"];
    const inputs = forms.elements;
    [...inputs].forEach(input => {
        if (input.nodeName.toLowerCase()=="input"){
            if (input.value==""){
                setInvalid(input);
                valid=false;
            }
        }
    });
    return valid;
}

const validatePhone = () => {
    const input = document.forms["myform"]["phone"];
    const x=input.value;
    check++;
    if (!(Number(x).toString().length>=9 && Number(x).toString().length<=11)) {
        setInvalid(input);
        input.value="";
        input.placeholder="Номер должен содержать от 9 до 11 цифр!";
        return false;
    }
    else{
        setValid(input);
        return true;
    }
}

const validateName = () => {
    const input = document.forms["myform"]["fullname"];
    const x=input.value;
    check++;
    if (x.split(" ").length!=3) {
        setInvalid(input);
        input.value="";
        input.placeholder="Необходимо ввести ФИО полностью!";
        return false;
    }
    else{
        setValid(input);
        return true;
    }
}

const validateAge = () => {
    const input = document.forms["myform"]["age"];
    const x=input.value;
    check++;
    if(x < 1 || x > 110){
        setInvalid(input);
        input.value="";
        return false;
    }
    else{
        setValid(input);
        return true;
    }
}

const validateEmail = () => {
    const input = document.forms["myform"]["email"];
    const x=input.value;
    check++
    const regexExp = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regexExp.test(x)){
        setInvalid(input);
        input.value="";
        input.placeholder="Вы неправильно введи почту";
        return false;
    }
    else{
        setValid(input);
        return true;
    }
}

const invalidAll = () => {
    var input = document.forms["myform"]["fullname"];
    setInvalid(input);
    var input = document.forms["myform"]["age"];
    setInvalid(input);
    var input = document.forms["myform"]["phone"];
    setInvalid(input);
    var input = document.forms["myform"]["email"];
    setInvalid(input);
}

let check = 0;
const but = document.forms["myform"]["button"];
const form = document.forms["myform"];
invalidAll();
fullname.addEventListener('blur', validateName);
phone.addEventListener('blur', validatePhone);
age.addEventListener('blur', validateAge);
email.addEventListener('blur', validateEmail);

const checkAllInput = () => {
    const elements = document.getElementsByClassName('valid-input');
    const count = elements.length;
    if(count == 4){
        but.disabled = false;
    }
    else{
        but.disabled = true;
    }
}

    // Время задержки исчезновения popover (в миллисекундах)
    const delay = 500; // 0.5 секунды

    // Обработчики для отображения и скрытия popover
    document.querySelectorAll('.form-group').forEach(function (group) {
        const inputElement = group.querySelector('input, textarea');
        const popover = group.querySelector('.popover');

        inputElement.addEventListener('mouseenter', function () {
            popover.style.display = 'block'; // Показываем popover
        });

        inputElement.addEventListener('mouseleave', function () {
            setTimeout(function () {
                popover.style.display = 'none'; // Скрываем popover после задержки
            }, delay);
        });
    });

form.addEventListener('keydown', checkAllInput);

// Получаем элементы модального окна и кнопки
const modal = document.getElementById("modal");
const openModalButton = document.getElementById("button");
const yesModalButton = document.getElementById("confirmSend");
const closeModalButton = document.getElementById("cancelSend");

// Открытие модального окна
openModalButton.addEventListener("click", () => {
    modal.classList.add("show");
});

yesModalButton.addEventListener("click", () => {
    form.submit();
    modal.classList.remove("show");
});

// Закрытие модального окна
closeModalButton.addEventListener("click", () => {
    modal.classList.remove("show");
});

// Закрытие модального окна при клике на фон
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.classList.remove("show");
    }
});


const validateTest = () => {
    const question1 = document.getElementById("question1");
    const question2Ch1 = document.getElementById("emissia");
    const question2Ch2 = document.getElementById("yadernii");
    const question2Ch3 = document.getElementById("difractia");
    const question2Ch4 = document.getElementById("electron");
    const question3 = document.getElementById("dropdown");
    let erroneousAnswers = "";
    if (question1.value.toLowerCase()!="аристотель"){
        setInvalid(question1);
        question1.value="";
        question1.placeholder="Неверный ответ"
        erroneousAnswers+="1";
    }
    var check = 0;
    if (question2Ch1.checked){
        check++;
    }
    else{
        setInvalid(document.getElementById("emissiaLabel"))
    }
    if (question2Ch2.checked){
        check++;
    }
    else{
        setInvalid(document.getElementById("yaderniiLabel"))
    }
    if (question2Ch4.checked){
        check++;
    }
    else{
        setInvalid(document.getElementById("electronLabel"))
    }
    if (question2Ch3.checked){
        setInvalid(document.getElementById("difractiaLabel"));
        check--;
    }
    if (check < 3){
        if (erroneousAnswers!=""){
            erroneousAnswers+=", ";
        }
        erroneousAnswers+="2";
    }
    if (question3.value!="Водород"){
        setInvalid(question3.value);
        if (erroneousAnswers!=""){
            erroneousAnswers+=", ";
        }
        erroneousAnswers+="3";
    }
    result=document.getElementById("result");
    if (erroneousAnswers.length==1){
        result.textContent="Была допущена ошибка в задании "+erroneousAnswers;
    }
    else if (erroneousAnswers.length>1){
        result.textContent="Были допущены ошибки в заданиях "+erroneousAnswers;
    }
    else{
        result.textContent="У вас нет ошибок!"
    }
}

document.getElementById("button").onclick = () => {
    setValid();
    if (validateElements()){
        validateName();
        validatePhone();
    }
    setTimeout(() => {
        setValid();
    }, "5000");
};

document.getElementById("button2").onclick = () => {
    setValid();
};

document.getElementById("button3").onclick = () => {
    setValid();
    if (validateElements()){
        validateName();
        validateTest();
    }
};

// export default {
//     data() {
//       return {
//         form: {
//           fullname: "",
//           age: "",
//           phone: "",
//           email: "",
//         },
//         errors: {
//           fullname: "",
//           age: "",
//           phone: "",
//           email: "",
//         },
//         isModalVisible: false,
//       };
//     },
//     computed: {
//       isFormValid() {
//         return !(
//           this.errors.fullname || 
//           this.errors.age || 
//           this.errors.phone || 
//           this.errors.email || 
//           !this.form.fullname || 
//           !this.form.age || 
//           !this.form.phone || 
//           !this.form.email
//         );
//       }
//     },
//     methods: {
//       setInvalid(inputName, message) {
//         this.errors[inputName] = message;
//       },
//       setValid(inputName) {
//         this.errors[inputName] = "";
//       },
//       validateName() {
//         const name = this.form.fullname;
//         if (name.split(" ").length !== 3) {
//           this.setInvalid('fullname', "Необходимо ввести ФИО полностью!");
//         } else {
//           this.setValid('fullname');
//         }
//       },
//       validateAge() {
//         const age = this.form.age;
//         if (age < 1 || age > 110) {
//           this.setInvalid('age', "Возраст должен быть от 1 до 110 лет!");
//         } else {
//           this.setValid('age');
//         }
//       },
//       validatePhone() {
//         const phone = this.form.phone;
//         if (!(phone.length >= 9 && phone.length <= 11)) {
//           this.setInvalid('phone', "Номер должен содержать от 9 до 11 цифр!");
//         } else {
//           this.setValid('phone');
//         }
//       },
//       validateEmail() {
//         const email = this.form.email;
//         const regexExp = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
//         if (!regexExp.test(email)) {
//           this.setInvalid('email', "Вы неправильно ввели почту");
//         } else {
//           this.setValid('email');
//         }
//       },
//       handleSubmit() {
//         this.isModalVisible = true;
//       },
//       submitForm() {
//         // Ваш код для отправки формы
//         console.log("Форма отправлена!");
//         this.closeModal();
//       },
//       closeModal() {
//         this.isModalVisible = false;
//       },
//     },
//   };