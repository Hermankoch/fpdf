<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FPDF</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <div class="menu">
      <input type="checkbox" class="nav_checkbox" id="navi-toggle">
      <label for="navi-toggle" class="nav_button">
        <span class="nav_icon"></span>
      </label>
      <div class="menu_open">
        <div class="menu_center">

        <form class="addRemoveForm" id="addNewElement">
          <label class="newElLabel" for="newItem">Insert After Item No:<input id="newItem" class="newElNum" type="number" name="newItem" value="" placeholder="0" required></label>
          <select class="newElOptions" name="textType" required>
            <option value="heading">Heading</option>
            <option value="paragraph">Paragraph</option>
          </select>
          <select class="newElOptions" name="numType" required>
            <option value="1">type-1</option>
            <option value="2">type-2</option>
          </select>
          <select class="newElOptions" name="decorationType" required>
            <option value="none">none</option>
            <option value="u-underline">Underline</option>
            <option value="u-bold">Bold</option>
            <option value="u-underline u-bold">Both</option>
          </select>
            <button class="btn btn-green" type="submit" name="submit" value="submit">Add New Item</button>
        </form>
        <form class="addRemoveForm" id="removeElement">
          <label class="newElLabel" for="delItem">Delete Item No:<input id="delItem" class="newElNum delElNum" type="number" name="delItem" value="" placeholder="0" required></label>
          <button class="btn btn-red" type="submit" name="submit" value="submit">Remove Item</button>

        </form>
        </div>
      </div>
    </div>

    <form class="contract" action="toPdf.php" method="post">
      <div class="inputWrapper"><input class="heading_1 tooltip" type="text" name="line1" value="Strictly private and confidential"></div>
      <div class="inputWrapper"><input class="heading_1 tooltip" type="text" name="line1" value="Entered into between"></div>
      <div class="inputWrapper"><input class="heading_1 tooltip" type="text" name="line1" value="(Name of company)"></div>
      <div class="inputWrapper"><input class="heading_1 u-underline tooltip" name="line1" type="text" placeholder="_______________________________"></div>
      <div class="inputWrapper"><input class="heading_1 tooltip" type="text" name="line1" value='(Herein after also referred to as "the employer" or "the company")'></div>
      <div class="inputWrapper"><input class="heading_1 tooltip" type="text" name="line1" value='and'></div>
      <div class="inputWrapper"><input class="heading_1 tooltip" type="text" name="line1" placeholder="Name of Employee"></div>
      <div class="inputWrapper"><label class="heading_1 tooltip" for="ID">(ID:<input class="heading_1 labelInput" type="text" name="ID" placeholder="Identity Number">)</label></div>
      <div class="inputWrapper"><input class="heading_1 tooltip" type="text" name="line1" value='(Herein after referred to as "the employee")'></div>

      <div class="inputWrapper"><input    class="heading_2 tooltip u-underline u-bold tooltip" type="text" name="line1" value='Terms and conditions of employment:'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">The terms and conditions set out herein will constitute the employee's contract with the company with effect from __________________.  Where a basic condition of employment is not specifically mentioned, the relevant legislation will be applicable (eg. the Basic Conditions of Employment Act, Act 75 of 1997, the Labour Relations Act, Act 66 of 1995 amendments to legislation etc.).
      </textarea></div>



      <div class="inputWrapper"><input    class="heading_2 tooltip u-underline u-bold" type="text" name="line1" value='Job Description:'></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip" type="text" name="line1" placeholder='Job Title e.g. Building Inspector'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">The Employee job description goes here. &NewLine;Duties - Explains what is expected of the employee. &NewLine;Work Hours - Explains will the employee work on weekends as well.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_2 tooltip u-underline u-bold" type="text" name="line1" value='Termination of employment :'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">This contract of employment may be terminated only on notice of not less than one week, if the employee has been employed for six months or less;
two weeks, if the employee has been employed for more than six months but not more than one year; four weeks, if the employee has been employed for one year or more; or is a domestic worker who has been employed for more than six months
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_2 tooltip u-underline u-bold" type="text" name="line1" value='Remuneration :'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">The employee's total monthly remuneration will be R______________, payable in arrears on the 3rd last working day of each month.  Should the regular payment date fall on a weekend or public holiday, the employer will pay the salary on the last working day before said day.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Remuneration will include the following :'></div>
      <div class="inputWrapper"><input    class="paragraph_2 tooltip" type="text" name="line1" value='Basic Salary R____________'></div>
      <div class="inputWrapper"><input    class="paragraph_2 tooltip" type="text" name="line1" value='Total R____________'></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='The following will be deducted from the salary :'></div>
      <div class="inputWrapper"><input    class="paragraph_2 tooltip" type="text" name="line1" value='(1) PAYE'></div>
      <div class="inputWrapper"><input    class="paragraph_2 tooltip" type="text" name="line1" value='(2) UIF'></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Benifits'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">Annual Bonus at Company Discretion:  (See notes on 13 th cheques elsewhere in this manual)
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 u-bold tooltip" type="text" name="line1" value='Work Hours'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="7" cols="80">Normal working hours will be from _____(08:00)  to ________(16:30) from Mondays to Fridays. The employer may not require or permit the employee to work more than forty-five (45) hours per week, calculated as follows:
Nine (9) hours on any day, if the employee works five (5) days or less a week; or
Eight (8) hours on any day if the employee works on more than five (5) days in a week; and
Lunch breaks are not included in this calculation.
Hours of work in terms of item 5.2 may be extended by up to fifteen (15) minutes a day, but may not exceed one (1) hour a week.  The reason for this provision is to allow the employee to finish the task at hand, especially when serving a client, at the end of a working day.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Meal Intervals'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="2" cols="80">The employee is entitled to a lunch break of 30 minutes.  Lunch breaks will be taken from 13:00 to 13:30 daily.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Overtime'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="2" cols="80">The employee may be permitted or requested to work overtime from time to time when needed, provided that the daily overtime shall not exceed three (3) hours a day and a total of ten (10) hours a week.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Remuneration in respect of overtime'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="5" cols="80">The employer shall calculate overtime remuneration at no less than 1.5 (one and one-half) the employee's hourly wage for each hour of overtime worked; or
Pay the employee no less than the employee's ordinary wage for each hour of overtime worked and grant the employee at least thirty (30) minutes time off with full pay for every hour of overtime worked; or
The remuneration method in 7.2.1 above will be the normal method of remuneration.  Should the employer need to use one of the other options due to circumstances, he/she will inform the employee accordingly, preferably in writing, before the commencement of overtime.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Sunday'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">Work on Sundays will not be compulsory, but will be agreed on by the parties to the best interest of the company and the employee from time to time.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Public holidays'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">The employee will be entitled to the following official public holidays on full pay:
*New Year's Day, *Youth Day, *Human Rights Day, *National Women's day, *Good Friday, *Heritage Day, *Family Day,
*Day of Reconciliation, *Freedom Day, *Christmas Day, *Worker's Day, *Day of  Goodwill
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Any other holiday declared by Government from time to time will also be granted with full pay.'></div>

      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Remuneration Public holidays'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">If the employee does not work on a public holiday, he/she shall receive normal payment for that day.
If the parties agree that the employee should work on any of the above days, the employee shall be paid double the normal day's wage for a full day or double the hourly wage for every hour worked.
The employer may also by agreement grant two (2) paid working days off in lieu of payment.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 u-bold tooltip" type="text" name="line1" value='Annual leave'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">The employee is entitled to (15) fifteen working days leave per annum.
Leave will not be granted concurrently with any other period of sick leave granted.
Leave will normally not be granted within the notice period regarding termination of service.
Leave may not be accumulated for more than eighteen (18) months, except where explicit written consent is obtained, detailing the amount of leave which may be accumulated.  Motivated written application must be made to obtain such consent.
Leave accumulated in terms of special permission referred to above will not be paid out at termination of service.  Leave may thus not be accumulated for purposes of inflating a severance package.
Leave must be applied for in writing in the form and manner prescribed by the company from time to time, and may only be taken after approval by the company or its delegated authority.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Sick leave'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">During every sick leave cycle (12 months) the employee will be entitled to an amount of sick leave equal to the number of days the employee would normally work during a period of four (4) weeks.
The employee will therefore be entitled to ten (10) days sick leave over a period of twelve (12) months (1 years).During the first six (6) months of employment the employee is entitled to one day's paid sick leave for every twenty-one (21) days worked.
In the case where the employee is unable to attend work due to medical reasons, the employee must ensure that the company is notified as soon as reasonably possible.
An application for sick leave must be supported by a certificate from a registered medical practitioner.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Family responsibilities leave'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="8" cols="80">The employee will be entitled to three (3) days family responsibility leave during each leave cycle (12 months).
Paragraph 11.1 only applies to an employee who:
Has been employed with the employer for longer than four (4) months; and
Works at least four (4) days a week for the employer.
Paragraph 11.1 only applies to an employee who:
Has been employed with the employer for longer than four (4) months; and
Works at least four (4) days a week for the employer.
The employer is only obliged to grant family responsibility leave under the following circumstances:
When the employee's child is born; or
When the employee's child is sick; or
In the event of death of the employee's spouse or life partner, parent or adoptive parent, grandparent, child, adopted child, grandchild or sibling.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Leave without remuneration'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="8" cols="80">Leave without remuneration may be granted when the employee's:
Sick leave credits are insufficient or have been depleted; or
Application for sick leave cannot be reasonably substantiated; or
Family responsibility leave credits are insufficient or have been depleted and no vacation leave credits are available.
The employee may apply in writing to be granted leave without remuneration for an extended period not exceeding six (6) months in exceptional circumstances. The application will be fully motivated.  The employer is not obliged to approve such an application.
If the employee is absent from duty without prior arrangement or permission, the employer may regard any period of such absence as leave without remuneration. This does not preclude the employer from taking disciplinary measures against the employee in terms of this contract.
Leave without remuneration will affect the accumulation of vacation leave credits on a pro-rata basis.
Leave without remuneration may affect the calculation of any bonus or reward that the employer may contemplate.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Deductions from remuneration'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="3" cols="80">The employer may not deduct any monies from the employee's salary unless the employee has agreed thereto in this contract or in writing on each occasion.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Trade secrets/confidentiality'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="8" cols="80">The employee undertakes, without prejudice to any general duty of confidentiality, not to disclose during the continuance of this contract or afterwards, any of the trade secrets of the employer or any information which is confidential to the employer's business.  Trade secrets include the following, which list will not be regarded as exhaustive man-hour tariffs, logistic techniques, proposal contents, client contacts, etc.
The employee further undertakes immediately after the termination of his/her services to hand over to the employer all documentation and data in his /her possession belonging to the employer, whether in hard copy, contained on computer disc or any other recording medium, including documents made by him /her in the course of his/her employment.  The aforementioned implies that any copy, abstract, or any precis of any document belonging to the employer made by the employee or any other person
shall itself belong to the employer.
The employee will not be liable to the employer for information divulged in terms of legislation or a court order compelling him/her to do so.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Restraint of trade'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">The employee may not for a period of six (6) months from the date of termination of this contract, whether on his/her own behalf or on the behalf of any other person, close corporation, partnership or company solicit custom from, deal with or supply any person, close corporation, partnership or company with whom the employer dealt at any time during his/her employment.
Paragraph 16.1 also applies to potential clients in which the employer has shown interest or with whom the employer was negotiating at the time of the employee's employment in the company.
This limitation of trade is restricted to the nature of the employer's business, products and services.
This limitation can be waived should both parties so agree.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Exclusive service'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">The appointment under this contract is a full time appointment and the employee shall devote his/her full commitment, energy and attention to the employer's business.
The employee shall not at any time during the continuance off this contract be directly or indirectly engaged, concerned or interested, whether for reward or otherwise, in any other trade, business or profession without the explicit written consent of the employer.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='Policies, grievance and disciplinary procedure'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">The employee will be subject to the company's disciplinary procedure, code of conduct and policies as determined and amended from time to time.
The Disciplinary Procedure and Code of Conduct is annexed hereto as annex B, and forms part of this contract.
Grievances or problems can be raised through the stipulated internal communication channels.
      </textarea></div>
      <div class="inputWrapper"><input    class="heading_3 tooltip u-bold" type="text" name="line1" value='General'></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip" name="name" rows="2" cols="80">Any changes to this agreement will only be valid if they are in writing and have been agreed upon and signed by both parties.
      </textarea></div>
      <div class="inputWrapper"><textarea class="paragraph_1 tooltip u-margin-top-small" name="name" rows="12" cols="80">Thus done and signed at .............................. on this, the ................. day of ................................. 2019.


...............................                                                     ...............................
Employer                                                                        Employee



...............................                                                     ...............................
Witness                                                                          Witness
      </textarea></div>
  </form>

  <script type="text/javascript">
    //Loop through all form elements to set ID and Tooltip text
    function updateItemCount() {
      let countId = 0;
      let inputWrapper = document.getElementsByClassName('inputWrapper');
      //let toolNum = document.getElementsByClassName('tooltipText');

      for (let i = 0; i < inputWrapper.length; i++) {
        countId += 1;
        //change ID
        inputWrapper[i].setAttribute("id",countId);


        let toolType2 = inputWrapper[i].getElementsByTagName('input')[0];
        if (toolType2 == undefined){
          toolType2 = inputWrapper[i].getElementsByTagName('textarea')[0];
        }
        let toolType3 = toolType2.classList[0];
        //console.log(toolType2.classList[0]);

        //remove last element which is tooltiptext span and create new span
        let getSpans = inputWrapper[i].getElementsByTagName('span')[0];
        if(getSpans != undefined){
        inputWrapper[i].removeChild(inputWrapper[i].lastChild);
        }

        let a = document.createElement('span');

        if(toolType3 == "paragraph_1"){
        a.classList.add('tooltipText2');
        }
        else {
        a.classList.add('tooltipText');
        }
        a.innerHTML = 'Item '+countId +', <span class="tooltipSmallText">'+toolType3+'</span>';
        inputWrapper[i].appendChild(a);
        }
    }
    updateItemCount();

  </script>



    <script>
    addNewElement.onsubmit = async (e) => {
    e.preventDefault();
    let formData = new FormData(addNewElement);

    let afterID     = formData.get("newItem");
    let textType    = formData.get("textType");
    let numType     = formData.get("numType");
    let decoration  = formData.get("decorationType");
    if(decoration == "none"){
      decoration = "";
    }
    let tooltip = ' tooltip';

    console.log(afterID);
    console.log(textType);
    console.log(numType);
    console.log(decoration);

    let addElement = document.createElement('div');
    addElement.className = 'inputWrapper';
    if (textType == 'paragraph' && numType == 1) {
      addElement.innerHTML = '<textarea class="paragraph_1 tooltip" name="name" rows="4" cols="80">Aenean euismod tincidunt sapien dapibus interdum. Morbi nec consectetur massa. Sed vehicula sagittis urna. Nunc ac viverra ante. Pellentesque quis mi non sapien convallis dapibus vel id lorem. Proin mi purus, dapibus vitae mollis id, auctor eu augue. Etiam ultricies sollicitudin luctus. Maecenas ullamcorper, neque vitae sollicitudin dignissim, leo libero pulvinar ipsum, quis sagittis leo felis vita elit. Ut finibus bibendum arcu. Integer suscipit urna quis mattis scelerisque.</textarea>';
    } else {
      addElement.innerHTML = '<input class="'+textType+'_'+numType+' '+decoration+' tooltip'+'" name="" value="Integer suscipit urna quis mattis scelerisque.">';
    }
    let add = document.getElementById(afterID);
    add.appendChild(addElement);
    console.log(add);

    if(add.nextSibling) {
      add.parentNode.insertBefore(addElement,add.nextSibling);
      updateItemCount();
    } else {
    myimg.parentNode.appendChild(addElement);
    updateItemCount();
    }


  } //end preventDefault

  removeElement.onsubmit = async (e) => {
  e.preventDefault();
  let formData = new FormData(removeElement);
  let delItemId = formData.get("delItem");
  let del = document.getElementById(delItemId);
  console.log(del);
  del.remove();
  updateItemCount();
  }

    </script>

  </body>
</html>
