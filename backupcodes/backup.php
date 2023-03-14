// $studentinfo = new studentinfo();

// $studentinfo->idNo = "C18-0362";
// $studentinfo->firstName = "Corbain Clyde";
// $studentinfo->middleName = "Rin";
// $studentinfo->lastName = "More";
// $studentinfo->suffix = "";
// $studentinfo->course = "BSIT";
// $studentinfo->year = 3;
// $studentinfo->birthDate = "2000-03-03";
// $studentinfo->gender = "Male";

// $studentinfo->save();

// echo "Student information successfully Added!";

//delete record
//find() -- useing the field name 'id' (default)
//where() -- using another field name

// $studentinfo = studentinfo::where('sno', 3);
// $studentinfo->delete();
// echo "Student info deleted.";

// $studentinfo = studentinfo::where('sno', 1)
// ->update(['firstname' => 'Corbain']);
// echo "student info has been edited.";

//Retrieve Record
$studentinfo = studentinfo::all();
return $studentinfo;
