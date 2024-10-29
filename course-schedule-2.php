<?php

class Solution
{

    /** (https://leetcode.com/problems/course-schedule-ii)
     * @param Integer $numCourses
     * @param Integer[][] $prerequisites
     * @return Integer[]
     */
    function findOrder($numCourses, $prerequisites)
    {
        $courses = range(0, $numCourses - 1);

        $dependencies = [];
        foreach ($prerequisites as $eachPreq) {
            $course = $eachPreq[0];
            $dependency = $eachPreq[1];

            if (!isset($dependencies[$course])) {
                $dependencies[$course] = [];
            }

            $dependencies[$course][] = $dependency;
        }

        $take = [];
        $i = 0;
        $courseCount = count($courses);
        while ($i < $courseCount) {
            $eachCourse = $courses[$i];
            $courseDeps = $dependencies[$eachCourse] ?? [];

            if (in_array($eachCourse, $take)) {
                $i++;
                continue;
            }

            if (empty($courseDeps)) {
                $take[] = $eachCourse;
                $i = 0;
                continue;
            } else {
                $cnt = 0;
                $depsCount = count($courseDeps);
                for ($j = 0; $j < $depsCount; $j++) {
                    $eachDep = $courseDeps[$j];
                    if (in_array($eachDep, $take)) {
                        $cnt++;
                    }
                }

                if ($cnt === $depsCount) {
                    $take[] = $eachCourse;
                    $i = 0;
                    continue;
                }
            }

            $i++;
        }

        if (count($take) !== $numCourses) {
            return [];
        }

        return $take;
    }
}
