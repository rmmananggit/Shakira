// CALENDAR

// Function to determine the current semester and school year
function getAcademicInfo() {
    const currentDate = new Date();
    const currentMonth = currentDate.getMonth() + 1; // getMonth() returns month from 0-11
    const currentYear = currentDate.getFullYear();

    let semester, schoolYear;

    // Determine the current semester based on the month
    if (currentMonth >= 6 && currentMonth <= 10) {
        semester = "First Semester";
        schoolYear = `${currentYear}-${currentYear + 1}`;
    } else if (currentMonth >= 11 || currentMonth <= 3) {
        semester = "Second Semester";
        schoolYear = `${currentYear - 1}-${currentYear}`;
    } else if (currentMonth >= 4 && currentMonth <= 5) {
        semester = "Summer Term";
        schoolYear = `${currentYear - 1}-${currentYear}`;
    }

    // Display semester and school year in the HTML
    document.getElementById('currentSemester').textContent = semester;
    document.getElementById('schoolYear').textContent = schoolYear;
}

// Run the function when the page loads
window.onload = getAcademicInfo;
