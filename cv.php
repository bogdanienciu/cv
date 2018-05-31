<?php require_once('data/mysql.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title> cv </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="cv.css">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CV</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#professionalskills">Professional Skills</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#educationandtraining">Education and Training</a></li>
            <li><a href="#personalskills">Personal Skills</a></li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container page">
    <div class="row">
      <div class="col-sm-4">
        <div class="row">
          <div class="col-sm-12">
            <img src="<?php echo $person->getProfilepicture(); ?>" alt="poza" class="img-responsive">
          </div>  
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="contact">
              <a href="<?php echo $person->getLinkedinprofile(); ?>" target="_blank">
                <img src="https://image.ibb.co/m7Deao/icon_linkedin.png" alt="icon_linkedin" border="0">
              </a>
              <?php if ($person->getGithubprofile() != ''): ?>
              <a href="<?php echo $person->getGithubprofile(); ?>" target="_blank">
                <img src="https://image.ibb.co/j9035o/icone_github.png" alt="icone_github" border="0">
              </a>
              <?php endif; ?>
              <a href="mailto:<?php echo $person->getMail(); ?>">
                <img src="https://image.ibb.co/n20go8/icon_mail.png" alt="icon_mail" border="0">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-8 bg-sectiunea2">
        <div class="row ">
          <div class="col-sm-12">
            <h2><?php echo $person->getName(); ?></h2>
          </div>  
        </div>
        <div class="row">
          <div class="col-sm-6">
            I am a hard working, honest individual. I am a good timekeeper, always willing to learn new skills. I am able to work independently in busy environments and also within a team setting. I am outgoing and tactful, and able to listen effectively when solving problems.
          </div>
          <div class="col-sm-6">
            I am an enthusiastic, self-motivated, reliable, responsible. I am a mature team worker and adaptable to all challenging situations. I am able to work well both in a team environment as well as using own initiative. I am able to work well under pressure and to strict deadlines.
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <table class="table table-condensed">
                <tr>
                  <th>Name</th>
                  <td><?php echo $person->getName(); ?></td>
                </tr>
                <tr>
                  <th>Date of birth</th>
                  <td><?php echo $person->getDateofbirth(); ?></td>
                </tr>
                <tr>
                  <th>Address</th>
                  <td><?php echo $person->getAddress(); ?></td>
                </tr>
              </table>
          </div>
          <div class="col-sm-6">
            <table class="table table-condensed">
                <tr>
                  <th>Email</th>
                  <td><?php echo $person->getMail(); ?></td>
                </tr>
                <tr>
                  <th>Phone</th>
                  <td><?php echo $person->getPhone(); ?></td>
                </tr>
                <tr>
                  <th>Skype</th>
                  <td><?php echo $person->getSkype(); ?></td>
                </tr>
              </table>
          </div>
        </div>

        <div id="professionalskills" class="section">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="subtitle">Professional Skills </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="coding">
                <?php foreach($person->getSkills() as $skill): ?>
                    <p><?php echo $skill->getName(); ?></p>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $skill->getName(); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill->getPercent(); ?>%;">
                        <?php echo $skill->getPercent(); ?>%
                      </div>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="assets"> 

                <?php foreach ($person->getSkillsAssets() as $skill): ?>
                  <p><?php echo $skill->getName(); ?></p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $skill->getPercent(); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill->getPercent(); ?>%;">
                      <?php echo $skill->getPercent(); ?>%
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div> 

        <div id="experience" class="section">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="subtitle">Experience</h2>
            </div>
          </div>

          <?php foreach ($person->getExperience() as $experience): ?>
            <div class="row">
              <div class="col-sm-3">
                <h4><?php echo $experience->getPeriod(); ?></h4>
              </div>
              <div class="col-sm-9">
                 <h4><?php echo $experience->getTitle(); ?></h4>
                <h5><?php echo $experience->getSubtitle(); ?></h5>
                <ul>
                  <?php foreach ($experience->getResponsabilities() as $responsability): ?>
                    <li><?php echo $responsability; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div id="educationandtraining" class="section">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="subtitle">Education and Training</h2>
            </div>
          </div>

            <?php foreach ($person->getEducation() as $education): ?>
              <div class="row">
                <div class="col-sm-3">
                  <h4><?php echo $education->getPeriod(); ?></h4>
                </div>
                <div class="col-sm-9">
                   <h4><?php echo $education->getTitle(); ?></h4>
                  <h5><?php echo $education->getSubtitle(); ?></h5>
                </div>
              </div>
            <?php endforeach; ?>
        </div>

        <div id="personalskills" class="section">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="subtitle">Personal Skills</h2>
            </div>
          </div>
         
          <div class="row">
            <div class="col-sm-3">
              Foreign language(s)
            </div>
            <div class="col-sm-9">
              <table class="table table-bordered">
                <tr>
                  <th rowspan="2" class="text-center"></th>
                  <th colspan="2" class="text-center">UNDERSTANDING</th>
                  <th colspan="2" class="text-center">SPEAKING</th>
                  <th rowspan="2" class="text-center">WRITING</th>
                </tr>
                <tr>
                  <td>Listening</td>
                  <td>Reading</td>
                  <td>Spoken interaction</td>
                  <td>Spoken production</td>
                </tr>
                <?php foreach ($person->getLanguage() as $language): ?>
                  <tr>
                    <td class="text-center"><?php echo $language->getName(); ?></td>
                    <td colspan="2" class="text-center"><?php echo $language->getUnderstanding(); ?></td>
                    <td colspan="2" class="text-center"><?php echo $language->getSpeaking(); ?></td>
                    <td><?php echo $language->getWriting(); ?></td>
                  </tr>
                <?php endforeach; ?>
                
                <tr>
                  <td colspan="6">
                    <a href="http://europass.cedefop.europa.eu/en/resources/european-language-levels-cefr" target="_blank"><small>Common European Framework of Reference for Languages</small></a></td>
                </tr>
              </table>
            </div>
          </div>

          <?php foreach ($person->getPersonal() as $personal): ?>
            <div class="row">
              <div class="col-sm-3">
                <p><?php echo $personal->getName(); ?></p>
              </div>
              <div class="col-sm-9">
                <ul>
                  <?php foreach ($personal->getResponsibilities() as $responsability): ?>
                    <li><?php echo $responsability; ?></li>
                  <?php endforeach; ?> 
                </ul>
              </div>
            </div>
          <?php endforeach; ?> 

        </div>
      </div>

    </div>
  </div>  
</body>
</html>