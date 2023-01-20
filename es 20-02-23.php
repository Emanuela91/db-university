-- ### Query
-- #### Group By
-- 1. Contare quanti iscritti ci sono stati ogni anno
-- ```sql
-- SELECT YEAR(enrolment_date), COUNT(*) 
-- FROM students 
-- GROUP BY YEAR(enrolment_date);
-- ```

-- 2. Contare gli insegnanti che hanno l'ufficio nello stesso edificio
-- ```sql
-- SELECT office_address, COUNT(*) AS teachers 
-- FROM teachers 
-- GROUP BY office_address;
-- ```

-- 3. Calcolare la media dei voti di ogni appello d'esame
-- ```sql
-- SELECT date, AVG(exam_student.vote) 
-- FROM exams 
-- JOIN exam_student 
-- ON exams.id = exam_student.exam_id 
-- GROUP BY date
-- ```

-- 4. Contare quanti corsi di laurea ci sono per ogni dipartimento
-- ```sql
-- SELECT department_id, COUNT(*) FROM degrees GROUP BY department_id;
-- ```

-- #### Join
-- 1. Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia
-- ```sql
-- SELECT degrees.name, students.* 
-- FROM degrees 
-- JOIN students 
-- ON degrees.id = students.degree_id 
-- WHERE degrees.name 
-- LIKE 'Corso di Laurea in Economia';
-- ```

-- 2. Selezionare tutti i Corsi di Laurea Magistrale del Dipartimento di Neuroscienze
-- ```sql
-- 	SELECT departments.name, degrees.* 
-- 	FROM departments 
-- 	JOIN degrees 
-- 	ON departments.id = degrees.department_id 
-- 	WHERE departments.name LIKE "%Dipartimento di Neuroscienze%" 
-- 	AND degrees.level LIKE "%magistrale%";