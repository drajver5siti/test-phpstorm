<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layout</title>

</head>
<body>

<div>
<!--    <div class="container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-2">-->
<!--                <div class="sidebar">-->
<!--                    <div class="sidebar-item" th:each="subject :${subjects}">-->
<!--                        <a class="sidebar-link" th:text="${subject.name}" th:href="|/view/${subject?.id}|"-->
<!--                           sec:authorize="isAuthenticated()"></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-10">-->
<!--                <div class="main-content">-->
<!--                    <div sec:authorize="isAuthenticated()" th:if="${flag} == true">-->
<!--                        <h3 style="display: flex; align-items: center;">-->
<!--                            Предавања-->
<!--                            <span style="margin-left: auto;">-->
<!--                        <form method="get" th:action="@{'/add/file/lecture/' + ${id}}"-->
<!--                              sec:authorize="hasAuthority('PROFESSOR')">-->
<!--                            <button class="btn btn-outline-primary">Add</button>-->
<!--                        </form>-->
<!--                     </span>-->
<!--                        </h3>-->
<!--                        <hr>-->
<!--                        <span th:each="lecture : ${lectures}">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">&lt;!&ndash;! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. &ndash;&gt;<path-->
<!--                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>-->
<!--                            <a th:href="@{'/download/' + ${lecture.id}}" th:text="${lecture.fileName}"></a>-->
<!--                            <br>-->
<!--                        </span>-->

<!--                        <br> <br> <br>-->
<!--                        <h3 style="display: flex; align-items: center;">-->
<!--                            Аудиториски вежби-->
<!--                            <span style="margin-left: auto;">-->
<!--                        <form method="get" th:action="@{'/add/file/exercise/' + ${id}}"-->
<!--                              sec:authorize="hasAuthority('PROFESSOR')">-->
<!--                            <button class="btn btn-outline-primary">Add</button>-->
<!--                        </form>-->
<!--                     </span>-->
<!--                        </h3>-->
<!--                        <hr>-->
<!--                        <span th:each="exercise : ${exercises}">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">&lt;!&ndash;! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. &ndash;&gt;<path-->
<!--                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg>-->
<!--                            <a th:href="@{'/download/' + ${exercise.id}}" th:text="${exercise.fileName}"></a>-->
<!--                            <br>-->
<!--                        </span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


</div>
</body>
</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/index.blade.php ENDPATH**/ ?>