let students = [];
const studentForm = document.getElementById('studentForm');
const studentTableBody = document.querySelector('#studentTable tbody');
const studentNameInput = document.getElementById('studentName');
const studentAgeInput = document.getElementById('studentAge');
const studentGradeInput = document.getElementById('studentGrade');
const studentIdInput = document.getElementById('studentId');

// Render the table
function renderTable() {
    studentTableBody.innerHTML = '';
    students.forEach((student, index) => {
        const row = `
            <tr>
                <td>${index + 1}</td>
                <td>${student.name}</td>
                <td>${student.age}</td>
                <td>${student.grade}</td>
                <td>
                    <button class="btn btn-edit" onclick="editStudent(${index})">Edit</button>
                    <button class="btn btn-delete" onclick="deleteStudent(${index})">Delete</button>
                </td>
            </tr>
        `;
        studentTableBody.insertAdjacentHTML('beforeend', row);
    });
}

// Add or update student
studentForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const name = studentNameInput.value;
    const age = studentAgeInput.value;
    const grade = studentGradeInput.value;
    const id = studentIdInput.value;

    if (id) {
        // Update existing student
        students[id] = { name, age, grade };
    } else {
        // Add new student
        students.push({ name, age, grade });
    }

    studentNameInput.value = '';
    studentAgeInput.value = '';
    studentGradeInput.value = '';
    studentIdInput.value = '';
    renderTable();
});

// Edit a student
function editStudent(index) {
    const student = students[index];
    studentNameInput.value = student.name;
    studentAgeInput.value = student.age;
    studentGradeInput.value = student.grade;
    studentIdInput.value = index;
}

// Delete a student
function deleteStudent(index) {
    students.splice(index, 1);
    renderTable();
}

// Initial render
renderTable();
