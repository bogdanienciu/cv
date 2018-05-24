<?php require_once('data.php'); ?>

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
            <img src="<?php echo $profilepicture; ?>" alt="poza" class="img-responsive">
          </div>  
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="contact">
              <a href="<?php echo $linkedinprofile; ?>" target="_blank">
                <img src="https://image.ibb.co/m7Deao/icon_linkedin.png" alt="icon_linkedin" border="0">
              </a>
              <?php if ($githubprofile != ''): ?>
              <a href="<?php echo $githubprofile; ?>" target="_blank">
                <img src="https://image.ibb.co/j9035o/icone_github.png" alt="icone_github" border="0">
              </a>
              <?php endif; ?>
              <a href="mailto:<?php echo $email; ?>">
                <img src="https://image.ibb.co/n20go8/icon_mail.png" alt="icon_mail" border="0">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-8 bg-sectiunea2">
        <div class="row ">
          <div class="col-sm-12">
            <h2><?php echo $name; ?></h2>
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
                  <td><?php echo $name; ?></td>
                </tr>
                <tr>
                  <th>Date of birth</th>
                  <td><?php echo $dateofbirth; ?></td>
                </tr>
                <tr>
                  <th>Address</th>
                  <td><?php echo $address; ?></td>
                </tr>
              </table>
          </div>
          <div class="col-sm-6">
            <table class="table table-condensed">
                <tr>
                  <th>Email</th>
                  <td><?php echo $email; ?></td>
                </tr>
                <tr>
                  <th>Phone</th>
                  <td><?php echo $phone; ?></td>
                </tr>
                <tr>
                  <th>Skype</th>
                  <td><?php echo $skype; ?></td>
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

                <?php foreach($data['coding_skills'] as $skill): ?>
                    <p><?php echo $skill["name"]; ?></p>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $skill["percent"]; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill["percent"]; ?>%;">
                        <?php echo $skill["percent"]; ?>%
                      </div>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="assets"> 

                <?php foreach ($data['assets_skills'] as $skill): ?>
                  <p><?php echo $skill['name']; ?></p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $skill["percent"]; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill["percent"]; ?>%;">
                      <?php echo $skill["percent"]; ?>%
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

          <?php foreach ($data['experiences'] as $experience): ?>
            <div class="row">
              <div class="col-sm-3">
                <h4><?php echo $experience['date']; ?></h4>
              </div>
              <div class="col-sm-9">
                 <h4><?php echo $experience['title']; ?></h4>
                <h5><?php echo $experience['subtitle']; ?></h5>
                <ul>
                  <?php foreach ($experience['responsabilities'] as $responsability): ?>
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

            <?php foreach ($data['education'] as $education): ?>
              <div class="row">
                <div class="col-sm-3">
                  <h4><?php echo $education['date']; ?></h4>
                </div>
                <div class="col-sm-9">
                   <h4><?php echo $education['title']; ?></h4>
                  <h5><?php echo $education['subtitle']; ?></h5>
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
              Mother tongue
            </div>
            <div class="col-sm-9">
              Romanian
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              Other language(s)
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
                <?php foreach ($data['languages'] as $language): ?>
                  <tr>
                    <td class="text-center"><?php echo $language['name']; ?></td>
                    <td colspan="2" class="text-center">C1</td>
                    <td colspan="2" class="text-center">B1</td>
                    <td>B1</td>
                  </tr>
                <?php endforeach; ?>
                
                <tr>
                  <td colspan="6">
                    <a href="http://europass.cedefop.europa.eu/en/resources/european-language-levels-cefr" target="_blank"><small>Common European Framework of Reference for Languages</small></a></td>
                </tr>
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-3">
              Communication skills
            </div>
            <div class="col-sm-9">
              <ul>
                <li>good communicatioanl skills gained through my experience abroad</li>
                <li>excellent interpersonal skills</li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-3">
              Organisational / managerial skills
            </div>
            <div class="col-sm-9">
              <ul>
                <li>being able to work under pressure and work to deadlines, skills gained at Pakweg Courier BVBA</li>
                <li>time management skills and capable of working well with others</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              Digital skills
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              
            </div>
            <div class="col-sm-9">
              <ul>
                <?php foreach ($data['digital'] as $digital): ?>
                  <li><?php echo $digital ?></li>
                 <?php endforeach; ?> 
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>  
</body>
</html>